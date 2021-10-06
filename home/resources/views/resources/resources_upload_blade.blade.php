@extends('layouts.app')
@section('content')
<style>
    .example-1 .form-group{padding:1em;margin:1em}
.example-1 input[type=file]{outline:0;opacity:0;pointer-events:none;user-select:none}
.example-1 .label{width:140px;border:2px dashed grey;border-radius:5px;display:block;padding:1.2em;transition:border 300ms ease;cursor:pointer;text-align:center}
.example-1 .label i{display:block;font-size:42px;padding-bottom:16px}
.example-1 .label i,.example-1 .label .title{color:grey;transition:200ms color}
.example-1 .label:hover{border:2px solid #000}
.example-1 .label:hover i,.example-1 .label:hover .title{color:#000}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create resources') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('resources_upload') }}" enctype="multipart/form-data" >
                        @csrf
                        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


                        <div class="example-1">
                          <div class="form-group">
                            <label class="label">
                              <i class="material-icons">attach_file</i>
                              <span class="title">Upload file</span>
                              <input type="file" name="file">
                            </label>
                          </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create resources') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {

    $('input[type="file"]').change(function()
    {
       var value = $("input[type='file']").val();
       $('.title').text(value.slice(12));
    });

});
</script>
@endsection






