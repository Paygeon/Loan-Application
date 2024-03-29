@extends('layouts.app', ['nav' => false])
@section('title', 'Welcome - Installation')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        @if(session('error'))
          <div class="alert alert-danger">
            {!! session('error') !!}
          </div>
        @endif

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif
      </div>

      <div class="card">
        <div class="card-body">
          <form class="form" id="details_form" method="post" 
            action="{{route('install.update')}}">
              {{ csrf_field() }}

            <h4> License Details <small class="text-danger">Make sure to provide correct information from Envato/codecanyon</small></h4>
            <hr/>

            <div class="form-row">
              <div class="form-group col-md-4">
                  <label for="envato_purchase_code">Envato Purchase Code:*</label>
                  <input type="text" name="ENVATO_PURCHASE_CODE" required class="form-control" id="envato_purchase_code">
              </div>

              <div class="form-group col-md-4">
                  <label for="envato_username">Envato Username:*</label>
                  <input type="text" name="ENVATO_USERNAME" required class="form-control" id="envato_username">
              </div>

              <div class="form-group col-md-4">
                <label for="envato_email">Your Email:</label>
                <input type="email" name="ENVATO_EMAIL" class="form-control" id="envato_email" placeholder="optional">
                <p class="help-block">For Newsletter & support</p>
              </div>
            </div>

            <br/>
            <strong class=''>💫 Book Update Service <a target='_blank' href='https://ultimatefosters.com/product/installation-update-service/'>Update Service</a></strong><br/><small><i>👉 Get updated by expert engineer within 24 hours</i><small>

            @include('ic.partials.e_license')

            <div class="col-md-12">
                <button type="submit" id="install_button" class="btn btn-primary float-right">I Agree, Update</button>
            </div>
          </form>
        </div>
          <!-- /.box-body -->
      </div>
    </div>
    </div>
</div>
@endsection

@section('javascript')
  <script type="text/javascript">
    $(document).ready(function(){
      $('select#MAIL_MAILER').change(function(){
        var driver = $(this).val();

        if(driver == 'smtp'){
          $('div.smtp').removeClass('hide');
          $('input.smtp_input').attr('disabled', false);
        } else {
          $('div.smtp').addClass('hide');
          $('input.smtp_input').attr('disabled', true);
        }
      })

      $('form#details_form').submit(function(){
        $('button#install_button').attr('disabled', true).text('Installing...');
        $('div.install_msg').removeClass('hide');
        $('.back_button').hide();
      });

    })
  </script>
@endsection