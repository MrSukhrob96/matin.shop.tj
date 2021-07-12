@extends('_layouts.admin.app')

@section('content')

<div class="main-content">

    <div class="row">
        <div class="col-12">

            <button id="notification-toast-btn" class="btn btn-primary" onclick="showToast()">Trigger</button>
            <div class="notification-toast top-right" id="notification-toast"></div>

            <script>
                function showToast() {
                    var toastHTML = `<div class="toast fade hide" data-delay="3000">
									<div class="toast-header">
										<i class="anticon anticon-info-circle text-primary m-r-5"></i>
										<strong class="mr-auto">Bootstrap</strong>
										<small>11 mins ago</small>
										<button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="toast-body">
										Hello, world! This is a toast message.
									</div>
								</div>`

                    $('#notification-toast').append(toastHTML)
                    $('#notification-toast .toast').toast('show');
                    setTimeout(function() {
                        $('#notification-toast .toast:first-child').remove();
                    }, 3000);
                }
            </script>
        </div>
    </div>
</div>

@endsection