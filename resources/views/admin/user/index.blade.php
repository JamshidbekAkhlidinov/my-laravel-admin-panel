
@extends('admin.layouts.main')

@section('content')

<div>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h2>TEST</h2>
            <button class="btn btn-success" vire:click="create">
                Create
            </button>
        </div>
        <div class="card-body">

            <ul>
                @foreach ($users as $user)
                   <li>
                    {{ $user->username }}
                   </li>
                @endforeach
            </ul>

        </div>
        <div class="card-footer">

        </div>
    </div>


</div>


@endsection