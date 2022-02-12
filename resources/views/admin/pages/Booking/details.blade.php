<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
    body{
    margin-top:10px;
    background:#eee;    
}
</style>

<div class="container bootdey">
    <div class="row invoice row-printable">
        <div class="col-md-10">
            <!-- col-lg-12 start here -->
            <div class="panel panel-default plain" id="dash_0">
                <!-- Start .panel -->
                <div class="panel-body p30">
                    <div class="row">
                        <!-- Start .row -->
                        <div class="col-lg-6">
                        </div>
                        <!-- col-lg-6 end here -->
                        <div class="col-lg-6">
                           
                        </div>
                        <!-- col-lg-6 end here -->
                        <div class="col-lg-12">
                           
                            <div class="invoice-to mt25">
                                <ul class="list-unstyled">
                                    <li><strong>Invoiced To</strong></li>
                                    <li>
                                        Name: {{$passengerDetails->name}}
                                    </li>
                                    <li>Email: {{$passengerDetails->email}}</li>
                                    <li>Phone: {{$passengerDetails->phone}}</li>
                                </ul>
                            </div>
                            <div class="invoice-items">
                                <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="per10 text-center">Bus Name</th>
                                                <th class="per10 text-center">Seat Name</th>
                                                <th class="per10 text-center">Date</th>
                                                <th class="per10 text-center">Time</th>
                                                <th class="per10 text-center">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1024MB Cloud 2.0 Server - elisium.dynamic.com (12/04/2014 - 01/03/2015)</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">$25.00 USD</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-footer mt25">
                                <p class="text-center"><a href="#" class="btn btn-danger">Print</a></p>
                            </div>
                        </div>
                        <!-- col-lg-12 end here -->
                    </div>
                    <!-- End .row -->
                </div>
            </div>
            <!-- End .panel -->
        </div>
        <!-- col-lg-12 end here -->
    </div>
    </div>