<?php 

use Src\Controller\CompanyController;
use Src\Controller\DashboardController;


add_action('admin_menu',function(){
    add_menu_page('Meter Reading','Meter Reading','manage_options','meter-reading-dashboard',[new DashboardController,'index'],'dashicons-location-alt',22);
    add_submenu_page( 'meter-reading-dashboard', 'Dashboard', 'Dashboard', 'manage_options', 'meter-reading-dashboard', function(){}); // replace function(){} with your function name
    add_submenu_page( 'meter-reading-dashboard', 'Company', 'Company', 'manage_options', 'meter-reading-company',[new CompanyController, 'index']);

    //ITEMS List
    // add_submenu_page( 'shell-inventory-dashboard', 'Items', 'Items', 'manage_inventory', 'shell-inventory-items', 'shell_item_list' );
    // //items create
    // add_submenu_page( '', 'Add Items', 'Add Items', 'manage_inventory', 'shell-inventory-items-add', 'shell_items_add' );

    // //ITEM CATEGORIES
    // add_submenu_page( 'shell-inventory-dashboard', 'Item Categories', 'Item Categories', 'manage_inventory', 'shell-inventory-item-categories', 'shell_item_categories_list');
    // add_submenu_page( 'shell-inventory-item-categories', 'Add Item Categories', 'Item Categories', 'manage_inventory', 'shell-inventory-item-categories-add', 'shell_item_categories_add');

    
    // add_submenu_page( 'shell-inventory-dashboard', 'Suppliers', 'Suppliers', 'manage_inventory', 'shell-inventory-suppliers',function(){
        
        
    // });
});

