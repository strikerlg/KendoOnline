@extends('layouts.dashboard')

@section('content')

    <h1>{!! $currentModelName !!}s</h1>
    <hr/>
    <div class="container">
        <div class="row col-md-8 custyle">
            <table class="table table-striped custab">
                <thead>
                <a href="{!!   URL::action('TournamentController@create') !!}" class="btn btn-primary btn-xs pull-right"><b>+</b> @lang('crud.addModel', ['currentModelName' => $currentModelName])</a>
                <tr>
                    <th>ID</th>
                    <th>{{ trans('crud.name') }}</th>
                    <th>{{ trans('crud.place') }}</th>
                    <th>{{ trans('crud.date') }}</th>
                    <th>{{ trans('crud.limitDateRegistration') }}</th>

                    <th class="text-center">{{ trans('crud.action') }}</th>
                </tr>
                </thead>
                @foreach($tournaments as $tournament)
                    <tr>
                        <td>{{ $tournament->id }}</td>
                        <td>{{ $tournament->name }}</td>
                        <td>{{ $tournament->place }}</td>
                        <td>{{ $tournament->tournamentDate }}</td>
                        <td>{{ $tournament->tournamentDate }}</td>

                        <td class="text-center">
                            <a class='btn btn-info btn-xs' href="{!!   URL::action('TournamentController@edit',  $tournament->id) !!}">
                                <span class="glyphicon glyphicon-edit"></span> {{ trans('crud.edit') }}</a>
                            {{--<a class="btn btn-danger btn-xs" href="/tournaments/{{ $tournament->id }}" data-method="delete" data-token="{{csrf_token()}}">--}}
                            <a class="btn btn-danger btn-xs" href="{!! URL::action('TournamentController@destroy',  $tournament->id) !!}" data-method="delete" data-token="{{csrf_token()}}">
                                <span class="glyphicon glyphicon-remove"></span> {{ trans('crud.delete') }}</a>
                        </td>
                    </tr>

                @endforeach

            </table>
        </div>
    </div>
    @include("errors.list")
    @stop

