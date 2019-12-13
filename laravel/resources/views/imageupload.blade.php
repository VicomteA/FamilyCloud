@extends('layouts.app')

@section('content')
<div class="container">
       
        <h3 class="jumbotron">Zone de dépôt</h3>
        <form method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
        @csrf
</div>
        </form>   
        <script type="application/javascript">
            Dropzone.options.dropzone =
             {
                maxFilesize: 12,
                renameFile: function(file) {
                    var dt = new Date();
                    var time = dt.getTime();
                   return time+file.name;
                },
                dictDefaultMessage: "Glissez-Déposez vos images ici",
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 5000,
                success: function(file, response) 
                {
                    console.log(response);
                },
                error: function(file, response)
                {
                   return false;
                }
        };
        </script>
@endsection