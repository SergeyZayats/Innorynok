@include('layouts.navigation')

<div id="wrapper" class="">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
           <ul class="sidebar-nav" id="menu-accordion">
                <li class="sidebar-brand">
                    <a href="/">
                        Company logo
                    </a>
                </li>
                <li class="panel dashboard"> <a data-toggle="collapse" class="collapsed" data-parent="#menu-accordion" href="#dashboard-link">Dashboard <span class="glyphicon  arrow"></span></a>
                    <ul id="dashboard-link" class="collapse">
                        <li><a href="#" class="active">SubTest1</a></li>
                        <li><a href="#">SubTest1</a></li>
                        <li><a href="#">SubTest1</a></li>
                    </ul>
                </li>
                <li class="panel transactions"> <a data-toggle="collapse" class="collapsed" data-parent="#menu-accordion" href="#transactions-link">Transactions <span class="glyphicon  arrow"></span></a>
                    <ul id="transactions-link" class="collapse">
                        <li><a href="#">SubTest2</a></li>
                        <li><a href="#">SubTest2</a></li>
                    </ul>
                </li>
                <li class="panel inv"> <a data-toggle="collapse" class="collapsed" data-parent="#menu-accordion" href="#inv-link">Inventories <span class="glyphicon  arrow"></span></a>
                    <ul id="inv-link" class="collapse">
                        <li><a href="#">SubTest2</a></li>
                        <li><a href="#">SubTest2</a></li>
                        <li><a href="#">SubTest2</a></li>
                        <li><a href="#">SubTest2</a></li>
                    </ul>
                </li>
                <li class="panel settings"> <a data-toggle="collapse" class="active" data-parent="#menu-accordion" href="#settings-link">Settings <span class="glyphicon  arrow"></span></a>
                    <ul id="settings-link" class="collapse active">
                        <li><a href="#">User Profile</a></li>
                        <li class="active"><a href="#">Company Settings</a></li>
                        <li><a href="#">Account Settings</a></li>
                        <li><a href="#">Billing Info</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div id="topbar">
                <div class="pull-left">
                    <a href="#menu-toggle" class="" id="menu-toggle">=<i class="fa fa-bars"></i></a>
                    <li class="dropdown company-name">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h1 class="company-name">BrownRice, Inc.</h1> <i class="glyphicon glyphicon-chevron-down onhover"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">BrownRice II, Inc.<span class="glyphicon glyphicon-paperclip pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="#">Bob's Oil, Inc. <span class="glyphicon glyphicon-paperclip pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="#">Add New Company <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                        </ul>
                    </li>
                </div>
                <div class="pull-right">
                    <div id="header_user">
                        Hi, oilman  <a href="/logout/">Sign off</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div id="main-content">
                

<div class="content-body">
  <div class="col-lg-12 main-box-container">
    <div class="box">
  <div class="box-head clearfix">
      <h1 class="pull-left">M2M Account</h1>
      <div class="actions pull-right">
            <a href="javascript:;" class="btn btn-add" data-toggle="modal" data-target="#add-user" title="Add User">
            <i class="glyphicon glyphicon-user" aria-hidden="true"></i>  Add User</a>
            <a href="javascript:;" class="btn btn-add" data-toggle="modal" data-target="#add-fuel-type" title="Fuel Type">
            <i class="fa fa-plus" aria-hidden="true"></i>Create Product</a>
    <a href="javascript:;" class="btn btn-add" data-toggle="modal" data-target="#add-inventory" title="Create Inventory">
            <i class="fa fa-plus" aria-hidden="true"></i>Create Inventory</a>
        <a href="javascript:;" class="btn btn-add" data-toggle="modal" data-target="#add-hedge-account" title="Create Hedge Account">
            <i class="fa fa-plus" aria-hidden="true"></i>Create Hedge Account</a>
            <a href="javascript:;" class="btn btn-add" data-toggle="modal" data-target="#add-hedge-account" title="Create Counterparty">
            <i class="fa fa-plus" aria-hidden="true"></i>Create Counter-Party</a>
      </div>
  </div>
<!--
<div>
    <select  class="form-control selectpicker" style="width:255px; display:inline-block;">
        <option>No Filter</option>
        <option>Company</option>
        <option>User Name</option>
        <option>Email</option>
    </select>
</div>
-->

        <div class="box-content">
        <div class="table-container">
            <table id="edit_account" class="table is-datatable dataTable">
                <thead>
                     <tr>
                         <th>Column name</th>
                         <th>Content</th>
                         <th>Description</th>
                     </tr>
                </thead>
                <tbody>
                     <tr>
                         <td>Id</td>
                         <td><a>30</a></td>
                         <td></td><td>
                     </td></tr>
                     <tr>
                         <td>Create Date</td>
                         <td>Dec. 13, 2016, 2:18 p.m.</td>
                         <td></td>
                     </tr>
                     <tr>
                         <td>Name</td>
                         <td><input type="text" value="Oilman, Inc" class="form-control"></td>
                         <td></td>
                     </tr>
                     <tr>
                         <td>Address</td>
                         <td><input type="text" value="Portland" class="form-control"></td>
                         <td></td>
                     </tr>
                     <tr>
                         <td>Email</td>
                         <td><input type="text" value="gumatt@gmail.com" class="form-control"></td>
                         <td></td>
                     </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
                    <button id="update_account" type="submit" class="btn btn-primary" onclick="update_account()">Save</button>
        </div>
    </div>
    
     <div class="box-head clearfix">
        <h1 class="pull-left">Account Users</h1>
    </div>
    <div class="box-content">
  <div class="table-container">
      <!--
            <div class="table-controls clearfix">
     <div class="table-actions pull-right">
        <div class="separator">
      <a title="Print selected rows" class="btn-print" href="javascript:;"></a>
      <a class="btn-edit" href="javascript:;"></a>
      <a id="delete_inventory" title="Delete selected rows" class="btn-delete" data-target="#remove_user" href="javascript:;"></a>
        </div>
    </div>
            <div class=" input-group table-search col-lg-4 pull-right">
                    <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                    <input type="search" placeholder="Search" class="form-control">
            </div>
            </div>
            -->
      <table id="users" class="table is-datatable">
    <thead>
        <tr>
          <th class="select-checkbox no-filter"></th>
          <th class="no-filter">Username</th>
          <th>Full Name</th>
          <th>Email Address</th>
                <th>Account Owner</th>
                <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <td class="select-checkbox no-filter"></td>
          <td class="no-filter">oilman</td>
          <td>Bob Smith</td>
          <td>bob@brownrice.com</td>
                <td style="text-align: left"><i class="glyphicon glyphicon-ok"></i></td>
                <td></td>
        </tr>
        <tr>
          <td class="select-checkbox no-filter"></td>
          <td class="no-filter">admin-brownrice</td>
          <td>Susie Smith</td>
          <td>susie@brownrice.com</td>
                <td></td>
                <td style="text-align: left"><span href="#" class="btn btn-xs btn-danger">Remove</span></td>
        </tr>  
        <tr>
          <td class="select-checkbox no-filter"></td>
          <td class="no-filter"></td>
          <td>John Jackson</td>
          <td>john@brownrice.com</td>
                <td></td>
                <td style="text-align: left"><span href="#" class="btn btn-xs btn-danger">Remove</span></td>
        </tr>  
    </tbody>
      </table>
  </div>
    </div>
    <div class="box-head clearfix">
        <h1 class="pull-left">Inventories</h1>
    </div>
    <div class="box-content">
  <div class="table-container">
      <!--
            <div class="table-controls clearfix">
     <div class="table-actions pull-right">
        <div class="separator">
      <a title="Print selected rows" class="btn-print" href="javascript:;"></a>
      <a class="btn-edit" href="javascript:;"></a>
      <a id="delete_inventory" title="Delete selected rows" class="btn-delete" data-target="#remove_user" href="javascript:;"></a>
        </div>
    </div>
            <div class=" input-group table-search col-lg-4 pull-right">
                    <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                    <input type="search" placeholder="Search" class="form-control">
            </div>
            </div>
            -->
      <table id="inventories" class="table is-datatable">
    <thead>
        <tr>
      <th class="select-checkbox no-filter"></th>
      <th class="no-filter">Inventory Name</th>
      <th>Fuel Type</th>
      <th>Location</th>
                        <th>Identifier Number</th>
                        <th>Volume</th>
                        <th>Create Date</th>
        </tr>
    </thead>
    <tbody>
                
    </tbody>
      </table>
  </div>
    </div>
    <div class="box-head clearfix">
        <h1 class="pull-left">Hedge Accounts</h1>
    </div>
    <div class="box-content">
        <div class="table-container">
            <table id="hedge_accounts" class="table is-datatable">
                <thead>
                    <tr>
                        <th class="select-checkbox no-filter"></th>
                        <th>Hedge Name</th>
                        <th>Institution</th>
                        <th>Account Number</th>
                        <th>Create Date</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="box-head clearfix">
        <h1 class="pull-left">Products</h1>
    </div>
    <div class="box-content">
        <div class="table-container">
            <table id="products" class="table is-datatable">
                <thead>
                    <tr>
                        <th class="select-checkbox no-filter"></th>
                        <th>Product Name</th>
                        <th>Desctiption</th>
                        <th>Fuel Class</th>
                        <th>Create Date</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="box-head clearfix">
        <h1 class="pull-left">Counter Parties</h1>
    </div>
    <div class="box-content">
        <div class="table-container">
            <table id="products" class="table is-datatable">
                <thead>
                    <tr>
                        <th class="select-checkbox no-filter"></th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Address</th>
                        <th>Identifier</th>
                        <th>Create Date</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

<!-- modals -->
        <div id="add-user" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                <form id="invite_user_info" action="">
                  <input type="hidden" name="csrfmiddlewaretoken" value="EWOIvVzzLzQnlowipCXQAQ49b9rS4aNE">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Invite User</h4>
                  </div>
                  <div class="modal-body clearfix">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">email address </label>
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="invite_user('User')">Save</button>
                  </div>
                </form>

            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div id="add-fuel-type" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                <form id="product_type_info" action="">
                  <input type="hidden" name="csrfmiddlewaretoken" value="EWOIvVzzLzQnlowipCXQAQ49b9rS4aNE">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Set Fuel Type</h4>
                  </div>
                  <div class="modal-body clearfix">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>please input comma separated values:</label>
                            <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input type="text" id="fuel_type" value="" name="fuel_type" class="form-control" data-role="tagsinput" style="display: none;">
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="add_fuel_type()">Save</button>
                  </div>
                </form>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div id="add-inventory" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                <form id="inven_hedge_info" action="">
                  <input type="hidden" name="csrfmiddlewaretoken" value="EWOIvVzzLzQnlowipCXQAQ49b9rS4aNE">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Add Inventory</h4>
                  </div>
                  <div class="modal-body clearfix">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">fuel type </label>
                            <select name="fuel_type" class="form-control">
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">location</label>
                            <input type="text" name="location" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Identifier Number</label>
                            <input type="text" name="id_number" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="">volume</label>
                            <input type="text" name="volume" class="form-control">
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="add_inventory('Inventory')">Save</button>
                  </div>
                </form>

            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div id="add-hedge-account" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                <form id="inven_hedge_info2" action="">
                  <input type="hidden" name="csrfmiddlewaretoken" value="EWOIvVzzLzQnlowipCXQAQ49b9rS4aNE">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Add Hedge Account</h4>
                  </div>
                  <div class="modal-body clearfix">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">institution </label>
                            <input type="text" name="institution" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">account number </label>
                            <input type="text" name="id_number" class="form-control">
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="add_inventory('HedgeAccount')">Save</button>
                  </div>
                </form>

            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
<div id="variables" style="display:none">
    <span id="current_account_id">30</span>
</div>

<!--
    <div id="remove_user" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="bootbox-body">Are you sure you want to delete the items?
                </div>
            </div>
        </div>
    </div>
-->


            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

</body>
</html>