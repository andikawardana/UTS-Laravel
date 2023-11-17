<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tabel</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <table class="table table-bordered mt-5">
        <thead>
          <tr>
            <td colspan="2" class="text-center">A</td>
            <td class="text-center">B</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">C</td>
            <td class="text-center">D</td>
            <td rowspan="2" class="text-center">E</td>
          </tr>
          <tr>
            <td colspan="2" class="text-center">F</td>
          </tr>
        </tbody>
      </table>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>