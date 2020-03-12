@extends('layouts.app', ['activePage' => 'settings', 'titlePage' => __('Settings')])

@section('content')
    <div class="content">
        <div class="container-fluid">
    <h3 class="page-title">FAQ</h3>

    <div class="panel panel-default">
        <div class="panel-heading">

        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Question</th>
                            <td>{{ $faq->question or '' }}</td>
                        </tr>
                        <tr>
                            <th>Answer</th>
                            <td>{{ isset($faq->answer) ? $faq->answer : '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('faqs.index') }}" class="btn btn-default">Back to List</a>
        </div>
    </div>
        </div>
    </div>
@stop
