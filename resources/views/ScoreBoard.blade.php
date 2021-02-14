@extends('app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 p-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="score">...</h2>
                        <h5>Live Score</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">
    var pusher = new Pusher('60064c33ec04a5cc96b9',{
        cluster:'ap2'
    })
    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event',function (data){
        $('.score').html();
        $('.score').html(data['ScoreValue']);
    })
</script>
@endsection
