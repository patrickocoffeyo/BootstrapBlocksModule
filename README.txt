Base Building Blocks Module

The Base Building Blocks Module is is an extension module to the [Base Building Blocks Theme](https://github.com/patrickocoffeyo/BaseBuildingBlocks). It allows users to proplerly add blocks, and pages that make full use of Twitter Bootstrap to their Drupal projects without adding Bootstrap into the module.

It ships with a parent module that makes sure [Base Building Blocks Theme](https://github.com/patrickocoffeyo/BaseBuildingBlocks) is installed and in use (Remember, these modules need Bootstrap!), and a collection of submodules that create completely customizeable Bootstrap Navbars, Administration Menus, standard menus in Bootstrap Dropdown Form, and more.

Requirements
The Base Building Blocks Module requires that you use [Base Building Blocks Theme](https://github.com/patrickocoffeyo/BaseBuildingBlocks), as it is an extension to that theme.

Installation
Installation is simple, just enable the Base Building Blocks module. A default set of submodules will be enabled.

Configuration
All configuration pages are added under admin/appearance/basebuildingblocks. You can customize each submodule (subtabs) there.

Extension
You can easily write submodules for the Base Building Blocks module, just place it in the submodules folder of the main module. 

Note:
When you write an extension that requires a settings (administration) page, please make sure that the path for that page is "admin/appearance/basebuildingblocks/yourModuleName". Also make sure that the menu item is set to MENU_LOCAL_TASK.

Contribution
If you find yourself needing to extend Base Building Blocks module (for instance, if you want to build a block that displays a Bootstrap carousel of text/images) then please share it with others!