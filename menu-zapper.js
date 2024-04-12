jQuery(document).ready(function($) {
    // Add the "X" button to each menu item
    //var $counter = 0;
    $('.menu-item-handle').each(function() {
        var $this = $(this);
        var id = $this.attr('id'); // Get the id attribute
        var number = id.replace('menu-item-', '');
        console.log(number); // Logs '1812'

        // var $caret = $('.item-edit');
        // var $button = $('<span class="menu-zapper-button">X</span>');
        // $caret.append($button);
        // console.log($caret);
    });

    // Handle the "X" button click event
    $(document).on('click', '.menu-zapper-button', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $menuItem = $this.closest('.menu-item');
        var menuName = $menuItem.find('.menu-item-title').text();
        var confirmDelete = confirm('Are you sure you want to delete the "' + menuName + '" menu and all its submenus?');
        if (confirmDelete) {
            // Delete the menu item and its submenus
            var menuId = $menuItem.attr('id');
            $('li[id^="' + menuId + '-"]').remove(); // remove child menus
            $menuItem.remove(); // remove parent menu
        }
    });
});