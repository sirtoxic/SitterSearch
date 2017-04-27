<h1> jobs </h1>

<html>
  <body>
    <ul>
      @foreach ($jobs as $job)
        <li>{{ $job->discription}}.....{{ $job->id}}.....{{ $job->location}}</li>
      @endforeach
    </ul>
  </body>
</html>
