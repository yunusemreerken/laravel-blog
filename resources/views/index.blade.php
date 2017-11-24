@extends('layouts.master')

@section('content')
@section('title','Anasayfa')
@section('masthead')
  <div class="site-heading">
      <h1>Clean Blog</h1>
      <span class="subheading">A Blog Theme by Start Bootstrap</span>
  </div>
@endsection

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Man must explore, and this is exploration at its greatest
                    </h2>
                    <h3 class="post-subtitle">
                        Problems look mighty small from 150 miles up
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2017</p>
            </div>
            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>
@endsection
