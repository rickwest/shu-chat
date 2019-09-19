@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chat</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <messages :messages="messages"></messages>
                </div>

                <div class="card-footer">
                    <message-form
                        v-on:messagesent="addMessage"
                        :user="{{ Auth::user() }}"
                    ></message-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
