<?php
use App\Http\ViewModels\BackLog\BackLogIndexViewModel;
/* @var  BackLogIndexViewModel $viewModel */
?>

@extends("layouts.default")
@section("title", "BackLog Index")
@section("content")
    <h1>Backlog</h1>
    <section>
        <h2>Index</h2>
        <a href="/backlog/add-user-story">Add User Story</a>

        <table>
            <thead>
            <tr>
                <th>Story</th>
                <th>Demo</th>
                <th>Estimate</th>
                <th>Author</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($viewModel->userStories as $story)
                <tr>
                    <td>{{$story->story}}</td>
                    <td>{{$story->demo}}</td>
                    <td>{{$story->estimation}}</td>
                    <td>{{$story->authorId}}</td>
                    <td><a href="/backlog/user-story/{{$story->id}}">Detail</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
