@extends('layouts.master')

@section('content')
<div class="row row-offcanvas row-offcanvas-right">
  <div class="col-lg-12">
    <p class="pull-right visible-xs">
      <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
    </p>
    <div class="jumbotron">
      <h1>
        Panda Projects
      </h1>
      <p>
        These are examples of projects I have been working on since Codeup began and a taste of things to come. Feel free to look around and ask me any questions by emailing me at <a href="mailto:omar.quimbaya4@gmail.com">this email address</a>.
      </p>
    </div>
    <div class="row">
      <div class="col-6 col-sm-6 col-lg-4">
        <h2>
          TODO App
        </h2>
        <p>
          Evolved from command line, this todo list is using multiple technologies, including MySQL.
        </p>
        <p>
          <a class="btn btn-default" href="https://github.com/WritingPanda/codeup.dev/blob/master/public/todo.php" role="button">View details &raquo;</a>
        </p>
      </div>
      <div class="col-6 col-sm-6 col-lg-4">
        <h2>
          Addressbook App
        </h2>
        <p>
          The addressbook application gave me experience manipulating CSVs using PHP.
        </p>
        <p>
          <a class="btn btn-default" href="https://github.com/WritingPanda/codeup.dev/blob/master/public/php-addressbook.php" role="button">View details &raquo;</a>
        </p>
      </div>
      <div class="col-6 col-sm-6 col-lg-4">
        <h2>
          99 Bottles of Beer
        </h2>
        <p>
          I wrote a command line application during a PHP challenge at the local PHP meet-up group.
        </p>
        <p>
          <a class="btn btn-default" href="https://github.com/WritingPanda/phpchallenges/blob/master/beer.php" role="button">View details &raquo;</a>
        </p>
      </div>
      <div class="col-6 col-sm-6 col-lg-4">
        <h2>
          Morse Code Converter
        </h2>
        <p>
          I built this morse code generator for the command line.
        </p>
        <p>
          <a class="btn btn-default" href="https://github.com/WritingPanda/phpchallenges/blob/master/morsecode.php" role="button">...- .. . .-- / -.. . - .- .. .-.. ... &raquo;</a>
        </p>
      </div>
      <div class="col-6 col-sm-6 col-lg-4">
        <h2>
          Palindrome
        </h2>
        <p>
          This app will let you know if a word or phrase is a palindrome in command line.
        </p>
        <p>
          <a class="btn btn-default" href="https://github.com/WritingPanda/phpchallenges/blob/master/palindrome.php" role="button">View details &raquo;</a>
        </p>
      </div>
    </div>
  </div>
</div>
<hr>

@stop