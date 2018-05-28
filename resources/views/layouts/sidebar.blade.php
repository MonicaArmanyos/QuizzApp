    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
       
        
    </div>

    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
       
        <!-- Optionally, you can add icons to the links -->
        @hasrole('admin')
        <li><a href="/users/create"><span>Create user</span></a></li>
        <li><a href="/questions/create"><span>Create question</span></a></li>
        @else if hasrole('student')
        <li><a href="#"><span></span></a></li>
        @endhasrole
        
    </ul><!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>