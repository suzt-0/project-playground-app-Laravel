<div>
  <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mail template</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <main
  style="
      font-family: sans-serif;
      font-size: 30px;
      color: rgb(39, 45, 50);
      border: 2px rgb(39, 45, 50) solid;
      border-radius: 20px;
      padding: 10px;
      margin: 10px;
      width: fit-content;
      height: fit-content;
      background-color: rgb(219, 219, 219);
      cursor: default;
  "
  >
    <div class="card"
    style="
      display: grid;
    "
    >
      <div 
      style="padding: 10px;"
      class="title">
        <h1>Invitation to join</h1>
      </div>
      <div 
      style="padding: 20px;"
      class="content">
        <div style="padding:8px; " class="pname">
          Project Name:
          <span style="
            border: 1px gray solid;
            border-radius: 15px;
            padding: 5px;
            color:rgb(183, 183, 183);
            background-color: rgb(29, 21, 31);
            font-size: 25px;
            cursor:text;
            ">
            {{$projectName}}
          </span>
        </div>
        <div class="pid">Project Id:
          <span style="
            border: 1px gray solid;
            border-radius: 15px;
            padding: 5px;
            color:rgb(183, 183, 183);
            background-color: rgb(29, 21, 31);
            font-size: 25px;
            cursor:text;
            ">
           {{ $projectId}}
          </span>
        </div>
      </div>
    </div>
    <div>
      <p 
      style="font-style: italic;"
      class="instruction">Note:Enter Project-id and Project-name in "Join Project" form of the web-application.</p>
    </div>
  </main>
</body>

</html>