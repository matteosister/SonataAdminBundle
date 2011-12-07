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
        plugins: ['themes', 'html_data']
    });
});