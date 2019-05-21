@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<div id="id01" class="container w3-center" style="z-index:4">
    <div class="w3-container w3-padding w3-red">
      <h2>Send SMS</h2>
    </div>
    <div class="w3-panel">
   <form id="formid" action="textpage" method="post">
      <label>To</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" name="to" required>
      <label>From</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" name="from">
      <label>Message</label>
      <input class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="Enter your message here" name="body" required>
      <div class="w3-section">
        <a class="w3-button w3-green w3-left" onclick="document.getElementById('formid').submit(); return false;">Send  <i class="fa fa-paper-plane"></i></a> 
</form>

      </div>    
    </div>
  </div>



@endsection
