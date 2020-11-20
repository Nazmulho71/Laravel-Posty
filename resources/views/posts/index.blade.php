<?php $pageTitle = 'Posts'; ?>

@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class=" bg-white p-6 rounded-lg mb-6">
                @guest
                    <p><a href="{{ route('login') }}" class="text-blue-500">Sign in</a> or <a href="{{ route('register') }}" class="text-blue-500">Create an account</a> to post something awesome!</p>
                @endguest

                @auth
                    <form action="{{ route('posts') }}" method="post">
                        <div class="mb-4">
                            @csrf
                            
                            <label for="body" class="sr-only">Body</label>
                            <textarea name="body" id="body" cols="30" rows="4" class="resize-none bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Write something awesome...">{{ old('body') }}</textarea>

                            @error('body')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium w-full">Post</button>
                        </div>
                    </form>
                @endauth
            </div>
            
            <div class="p-6">
                <h1 class="text-2xl font-medium mb-1">Latest Posts</h1>
            </div>

            <div class="bg-white p-6 rounded-lg">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <x-post :post="$post" />
                    @endforeach

                    {{ $posts->links() }}
                @else
                    <p>It's lonely here! Try to add something.</p>
                @endif
            </div>
        </div>
    </div>
@endsection