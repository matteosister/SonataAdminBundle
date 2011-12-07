/**
 * User: matteo
 * Date: 06/12/11
 * Time: 22.35
 * @matteosister
 * Just for fun...
 */

$(document).ready( function() {
    $('.jstree').jstree({
        core: {},
        themes: {
            theme: 'sonata'
        },
        "dnd" : {
            "drop_finish" : function () {
                alert("DROP");
            },
            "drag_check" : function (data) {
                if(data.r.attr("id") == "phtml_1") {
                    return false;
                }
                return {
                    after : false,
                    before : false,
                    inside : true
                };
            },
            "drag_finish" : function (data) {
                alert("DRAG OK");
            }
        },
        plugins: ['themes', 'html_data', "contextmenu", "dnd"]
    });
});