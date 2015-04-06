/* Custom filtering function which will filter data in column four between two values */
$.fn.dataTableExt.afnFiltering.push(
        function(oSettings, aData, iDataIndex) {
            var retval = false;
            var iMin = document.getElementById('min_age').value;
            var iMax = document.getElementById('max_age').value;
            //leggo il val del radiobutton selezionato
            var radiochecked = "";
            var elem = document.getElementsByName("sex");
            for (var i = 0; i < elem.length; i++) {
                if (elem[i].checked)
                    radiochecked = elem[i].value;
            }
            var iAge = aData[4];
            if (iMax == "all")
                retval = true;
            else if (iAge == "")
                retval = false;
            else if (iAge >= iMin && iAge <= iMax)
            {
                retval = true;
            }
 /*           if (retval && radiochecked != "X") {
                ////////Verifico le checkbox
                if (radiochecked == aData[5]) {
                    retval = true;
                } else
                    retval = false;
                ////////////////////////////
            }//close if(retval && radiochecked!="X")     
*/
            //Analizzo il valore di retval. Se è true significa che il filtroetà ha avuto esito positivo e verifico quindi il comune:

            if (retval && $("#comune").val() != "" && $("#comune").val() != aData[2])
                retval = false;

            return retval;
        });


$(document).ready(function() {
    //parametri per datatable
    var datatableParam = {
        "fnServerData": function(sUrl, aoData, fnCallback, oSettings) {
            oSettings.jqXHR = $.ajax({
                "url": sUrl,
                "data": aoData,
                "success": function(json) {
                    if (json.sError) {
                        oSettings.oApi._fnLog(oSettings, 0, json.sError);
                    }
                    $(oSettings.oInstance).trigger('xhr', [oSettings, json]);
                    fnCallback(json);
                },
                "dataType": "json",
                "cache": false,
                "type": oSettings.sServerMethod,
                "error": function(xhr, error, thrown) {
                    if (error == "parsererror") {
                        oSettings.oApi._fnLog(oSettings, 0, "DataTables warning: JSON data from " +
                                "server could not be parsed. This is caused by a JSON formatting error.");
                    }
                }
            });
        },
        "num_col_id": 6, //colonna contenente l' id da inviare con get quando si clicca su una riga.
        "sScrollY": 300,
        "bScrollCollapse": 1,
        "bPaginate": 0,
        "bRetrieve": 1,
        "bDestroy": 1,
        "iDisplayLength": 1000000,
        "bProcessing": true,
        "sAjaxSource": '../Ajax/ajax_advancedsearch.php',
        "aoColumns": [
            {
                "sTitle": "Cognome"
            },
            {
                "sTitle": "Nome"
            },
            {
                "sTitle": "idcom",
                "bVisible": false
            },
            {
                "sTitle": "Data di Nascita",
                "bSortable": false
            },
            {
                "sTitle": "Età"
            },
            {
                "sTitle": "Sesso"
            },
            {
                "sTitle": "N° Scheda"
            }
        ]
    };

    //////////////////////////////////////////////////////////////////////////////

    $("#DTable").jqDataTable(datatableParam);

    $(".age, #comune").multiselect({
        header: false,
        multiple: false,
        selectedText: '# selezionate',
        minWidth: 220,
        height: 190,
        selectedList: 1
    });

    $(".radiobtn").buttonset();

    $(".radiobtn").click(function() {
        $("#DTable").dataTable(datatableParam).fnDraw();
    });

    $("input:button").button();

    $("#error_msg").html("&nbsp;");

    $(".age, #comune").change(function() {
        var minage = $("#min_age").val();
        var maxage = $("#max_age").val();

        if (parseInt(minage) > parseInt(maxage))
            $("#error_msg").html("Fascia di età non corretta!");
        else {
            $("#error_msg").html("&nbsp;");
            $("#DTable").dataTable(datatableParam).fnDraw();
        }
    });

});// close $(document).ready(function()