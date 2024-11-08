<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      
    <x-tree text="Tree">
      <x-menu text="One" :url="route('admin.dashboard')" />
      <x-menu text="Two"/>
      <x-menu text="Three"/>
    </x-tree>

      <x-menu text="Four"/>
      

     <x-logout text="Logout" />
     
    </ul>
  </nav>