@extends('layout.layout')

@section('container')
<div class="container mt-5">

    @php
        $rowCount = 1;
    @endphp
    <table class="table table-striped" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($news as $news)
                <tr>
                    <th scope="row">{{ $rowCount }}</th>
                    <td>{{ $news['title'] }}</td>
                    <td>{{ $news['content'] }}</td>
                    <td>{{ $news['posted_date'] }}</td>
                </tr>
                @php
                    $rowCount++    
                @endphp
                
            @endforeach
        
        </tbody>
    </table>
</div>
@endsection