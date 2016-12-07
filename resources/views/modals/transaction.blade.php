<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Transaction Details</h4>
        </div>
        <div class="modal-body">
           <div class="row">
               <div class="col-md-4">
                   <p>Juan Dela Cruz</p>
               </div>
               <div class="col-md-4 text-center">
                   <p>12/05/16</p>
               </div>
               <div class="col-md-4 text-right">
                   <p>0001</p>
               </div>
           </div>
           <div class="row">
               <div class="col-md-9">
                   <table class="table">
                    <thead>
                      <tr>
                        <th>Request</th>
                        <th># of copies</th>
                        <th>Price</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tbody>
                      <tfoot>
                        <tr>
                          <td>Request For Application</td>
                          <td></td>
                          <td>Total:</td>
                          <td></td>
                        </tr>
                      </tfoot>
                  </table>
               </div>
               <div class="col-md-3">
                   <button type="button" class="btn btn-success btn-block" disabled="disabled">Download</button>
                   -click this to generate all the documents
               </div>
           </div>
           <div class="row" id="orig">
            <div class="col-md-12">
               Status: Waiting for Payment
               <br>
               <button class="btn btn-primary pay-button pull-left" id="pay">Pay</button>
               <div class="input-group payment-input">
                    <input type="text" class="form-control" aria-label="...">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-danger pay-cancel"><span class="glyphicon glyphicon-remove white-text" aria-hidden="true"></span></button>
                        <button type="button" class="btn btn-success">submit</button>
                    </div>
                </div>
            </div>
           </div>
           <div class="row">
               <div class="col-md-4">
                  <!-- <button type="button" class="btn btn-primary">Ready...</button>-->
               </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>