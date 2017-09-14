@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <button class="btn btn-success" id="connectChat" style="display: none;">Connect</button>
            <button class="btn btn-danger" id="disconnectChat" style="display: none;">Disconnect</button>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
                <textarea name="textMessage" cols="30" rows="2" id="textMessage" style="width:100%;"></textarea>
                <button class="btn btn-success" id="sendMessage">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection
