@extends('app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 p-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Update Score</h5>
                        <hr>
                        <input type="text" class="form-control ScoreValue"><br>
                        <button class="updateBtn btn btn-block btn-success">Update</button>
                        <h4 class="LastScore"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">
    $('.updateBtn').click(function (){
       var scoreValue = $('.ScoreValue').val();
       var url = "/pushScoreValue";

       axios.post(url,{score:scoreValue}).then(function (response){
            $('.LastScore').html(response.data);
       }).catch(function (){

       })

    })
</script>
@endsection
