@extends('admins.sidebar') 


@section('content')
<!-- Main content -->
<div class="content-wrapper"> 
         <div class="card m-3 p-2">
           <div class="card-header">
             <h5 class="card-title">Monthly Recap Report</h5>
             <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse">
                 <i class="fas fa-minus"></i>
               </button>
               <button type="button" class="btn btn-tool" data-card-widget="remove">
                 <i class="fas fa-times"></i>
               </button>
             </div>
           </div>
         
           <!-- /.card-header -->
           <div class="card-body">
             <div class="row">
               <div class="col-md-8">
                 <p class="text-center">
                   <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                 </p>

                 <div class="chart">
                   <!-- Sales Chart Canvas -->
                   <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                 </div>
                 <!-- /.chart-responsive -->
               </div>
               <!-- /.col -->
               <div class="col-md-4">
                 <p class="text-center">
                   <strong>Goal Completion</strong>
                 </p>

                 <div class="progress-group">
                   Add Products to Cart
                   <span class="float-right"><b>160</b>/200</span>
                   <div class="progress progress-sm">
                     <div class="progress-bar bg-primary" style="width: 80%"></div>
                   </div>
                 </div>
                 <!-- /.progress-group -->

                 <div class="progress-group">
                   Complete Purchase
                   <span class="float-right"><b>310</b>/400</span>
                   <div class="progress progress-sm">
                     <div class="progress-bar bg-danger" style="width: 75%"></div>
                   </div>
                 </div>

                 <!-- /.progress-group -->
                 <div class="progress-group">
                   <span class="progress-text">Visit Premium Page</span>
                   <span class="float-right"><b>480</b>/800</span>
                   <div class="progress progress-sm">
                     <div class="progress-bar bg-success" style="width: 60%"></div>
                   </div>
                 </div>

                 <!-- /.progress-group -->
                 <div class="progress-group">
                   Send Inquiries
                   <span class="float-right"><b>250</b>/500</span>
                   <div class="progress progress-sm">
                     <div class="progress-bar bg-warning" style="width: 50%"></div>
                   </div>
                 </div>
                 <!-- /.progress-group -->
               </div>
               <!-- /.col -->
             </div>
             <!-- /.row -->
           </div>
           <!-- ./card-body -->
           <div class="card-footer">
             <div class="row">
               <div class="col-sm-3 col-6">
                 <div class="description-block border-right">
                   <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                   <h5 class="description-header">$35,210.43</h5>
                   <span class="description-text">TOTAL REVENUE</span>
                 </div>
                 <!-- /.description-block -->
               </div>
               <!-- /.col -->
               <div class="col-sm-3 col-6">
                 <div class="description-block border-right">
                   <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                   <h5 class="description-header">$10,390.90</h5>
                   <span class="description-text">TOTAL COST</span>
                 </div>
                 <!-- /.description-block -->
               </div>
               <!-- /.col -->
               <div class="col-sm-3 col-6">
                 <div class="description-block border-right">
                   <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                   <h5 class="description-header">$24,813.53</h5>
                   <span class="description-text">TOTAL PROFIT</span>
                 </div>
                 <!-- /.description-block -->
               </div>
               <!-- /.col -->
               <div class="col-sm-3 col-6">
                 <div class="description-block">
                   <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                   <h5 class="description-header">1200</h5>
                   <span class="description-text">GOAL COMPLETIONS</span>
                 </div>
                 <!-- /.description-block -->
               </div>
             </div>
             <!-- /.row -->
           </div>
           <!-- /.card-footer -->
         </div>
         <!-- /.card -->
       </div>
       <!-- /.col -->
     </div>
            <!-- TABLE: LATEST ORDERS -->
    <div class="content-wrapper"> 
            <div class="card m-3 p-2">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Orders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2 m-2">
                <div class="table-responsive">
                  <table class="table m-0 p-2">
                    <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Item</th>
                      <th>Status</th>
                      <th>Popularity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-info">Processing</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
                <!-- /.table-responsive -->
              </div>
             
            </div>
            <!-- /.card -->
</div>
@endsection

  

