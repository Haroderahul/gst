<!DOCTYPE html>
<html lang="en-us">
<head>
<?php $this->load->view('admin/layouts/meta'); ?>
</head>

<body class="layout layout-vertical layout-left-navigation layout-below-toolbar">
<main>
<div id="wrapper">
<aside id="aside" class="aside aside-left" data-fuse-bar="aside" data-fuse-bar-media-step="md" data-fuse-bar-position="left">
<?php $this->load->view('admin/layouts/site_bar'); 
?>
</aside>
<div class="content-wrapper">
<nav id="toolbar" class="bg-white">

<?php $this->load->view('admin/layouts/header'); ?>
</nav>
<div class="content custom-scrollbar">

<div id="project-dashboard" class="page-layout simple right-sidebar">

<div class="page-content-wrapper custom-scrollbar">

<!-- HEADER -->
<?php $this->load->view('admin/layouts/inside_header'); ?>
<!-- / HEADER -->
<!-- CONTENT -->
<div class="page-content p-6">
  <div id="errorMessage"></div>
                <?php
                if($this->session->flashdata('message')){ ?>
                  <div class="alert alert-success">
                    <h5><?php echo $this->session->flashdata('message'); ?></h5>
                  </div>
                      <?php }elseif($this->session->flashdata('error')){ ?>
                   <div class="alert alert-danger">
                    <h5><?php echo $this->session->flashdata('error'); ?></h5>
                  </div>
                <?php } ?>
<div class="topTab" style="margin-top: 0px;">
          <form method="POST" id="partyForm">
             <?php echo validation_errors(); ?>
              <div class="row form-group col-md-12" style="padding: 0; margin: 0;">
                <div class="col-md-3" >
                  <h5 style="margin-left: 90%">Demo</h5>
                    <label class="control-label">Customer Type</label>
                    <?php echo set_value('customerType'); ?>
                    
                      <select class="form-control" name="customerType" id="customerType"  required="required">
                        <option value=""></option>
                        <option id="1" value="1">permanant</option>
                        <option id="2" value="2">temprary</option>
             
                      </select>
                  </div>
              </div>
              <div class="row form-group  col-md-12">
                  <div class="col-md-3">
                    <label class="control-label">Customer/Company Name</label>
                    <?php echo set_value('customer'); ?>
                    
                      <input type="text" name="customer" id="customer" class="form-control" required="required">
                      <input type="text" name="id" id="id" class="form-control" hidden="hidden" >
                  </div>
                  <div class="col-md-3">
                     <label class="control-label">Primary Contact Person</label>
                    
                     <input type="text" name="primaryContactPerson" id="primaryContactPerson" class="form-control"  required="required">
                  </div>
                  <div class="col-md-3">

                    <label class="control-label">Email</label>
                    <div style="color: red;"><?php echo form_error('accountHolder'); ?></div>

                     <input type="text" name="email" id="email" class="form-control"  required="required">
                  </div>
                  <div class="col-md-3">
                    <label class="control-label">Mobile</label>
                    <input type="text" name="mobile" id="mobile" class="form-control"  required="required">
                  </div>
              </div>
              <div class="row form-group  col-md-12" >
                  <div class="col-lg-2"  >
                     <label class="control-label" >Billing Address</label>
                     <input type="text" name="billingAddress" id="billingAddress" style="width: 160px;"  class="form-control"  required="required">
                  </div>
                  <div class="col-lg-3" style="width: 200px;">
                    <label class="control-label"  >Address line2</label>
                    <input type="text" name="addressLine2" id="addressLine2" class="form-control"  required="required">
                  </div>
                  <div class="col-lg-3" style="width: 200px;" >
                    <label class="control-label">City</label>
                    <input type="text" name="city" id="city" class="form-control"  required="required">
                  </div>
                  <div class="col-lg-3" style="width: 200px;">
                    <label class="control-label">State</label>
                    <input type="text" name="state" id="state" class="form-control"  required="required">
                  </div>
                  <div class="col-lg-3" style="width: 200px;">
                    <label class="control-label">Pin</label>
                    <input type="text" name="pin" id="pin" class="form-control"  required="required">
                  </div>
              </div>
              <div class="row form-group col-md-12">
                <div class="col-md-4">
                   <label class="control-label">GSTIN No</label>
                   <input type="text" name="gstinNo" id="gstinNo" class="form-control"  required="required">
                </div>
                <div class="col-md-4">
                   <label class="control-label">Pan No</label>
                   <input type="text" name="panNo" id="panNo" class="form-control"  required="required">
                </div>
              </div>
              <div class="row form-group col-md-12">
                <div class="col-md-6">
                   <label class="control-label">Collection Route</label>
                      <select class="form-control" name="collectionRoute" id="collectionRoute"  required="required">
                        <option value=""></option>
                        <option id="1" value="1">Route1</option>
                        <option id="2" value="2">Route2</option>
                        <option id="3" value="3">Route3</option>
             
                      </select>
                </div>
                <div class="col-md-2">
                   <label class="control-label">Opening Balance</label>
                   <input type="text" name="openingBalance" id="openingBalance" class="form-control"  required="required">
                </div>
                <div class="col-md-2">
                   <label class="control-label">Required SMS</label>
                      <select class="form-control" name="requiredSms" id="requiredSms"  required="required">
                        <option value=""></option>
                        <option id="1" value="1">SMS1</option>
                        <option id="2" value="2">SMS2</option>
                        <option id="3" value="3">SMS3</option>
             
                      </select>
                </div>
              </div>
              
              <br>
    <div class="row form-group col-md-12">
         <div class="col-md-9" style="">
               <input type="file" name="" class="">
               <button name="" value="" class="btn btn-default" >Select File</button> 
               <button name="" value="" class="btn btn-default" >Download</button>
               <button name="" value="" class="btn btn-default" >Upload</button> 
         </div> 
         
    </div>
    <div class="row form-group col-md-12">
      <div class="col-md-6 " style="display: inline-flex;">
          <button name="add" value="submit" id="partysubmit" class="btn  " style="width: 120px;margin: 10px 10px; margin-left: 10px; background-color: blue; color: white;" >Add</button> 
          <button type="button" name="modify" value="update" id="partyUpdate" class="btn  btn-primary   " style="width: 120px;margin: 10px 10px; color: white;">Modify</button>
          <button type="button" name="delete" value="delete" id="partyDelete" class="btn  btn-secondery " style="width: 120px;margin: 10px 10px; background-color: red; color: white;">Delete</button> 
        </div>
    </div>
          </form>
              <div class="row form-group col-md-12">
                 <div class="col-md-6" style="display: inline-flex;padding: 0;margin: 10px 0px; ">
                    <label class="control-label"></label>
                     <select class="form-control" name=""  >
                        <option>text</option>
                        <option>text1</option>
                        <option>text2</option>
                        <option>text3</option>
             
                      </select>  
                  </div>
              </div>
       </div>
       </div>
        <div class="container">
              <table id="partyResult" class="table col-md-12 table-responsive" >
                    <thead>
                      <tr>  
                       <th width="5%">customerType</th>
                       <th width="5%">customer</th>
                       <th width="5%">primaryContactPerson</th>
                       <th width="5%">email</th>
                       <th width="5%">mobile</th>
                       <th width="5%">billingAddress</th>
                       <th width="5%">addressLine2</th>
                       <th width="5%">city</th>
                       <th width="5%">state</th>
                       <th width="5%">pin</th>
                       <th width="5%">gstinNo</th>
                       <th width="5%">panNo</th>
                       <th width="5%">collectionRoute</th>
                       <th width="5%">openingBalance</th>
                       <th width="5%">requiredSms</th>
                       <th width="5%">action</th>
                      </tr>
                    </thead>               
              </table>
            </div>
       </div>

</div>


</div>


</div>
</div>

</div>


</body>
</html>
<?php $this->load->view('admin/layouts/footer'); ?>
  
