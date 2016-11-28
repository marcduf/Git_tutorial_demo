# Git_tutorial_demo
Small demo for a GitHub tutorial

In this demo some files are stored and some instructions are written in this README.md file. Start at START...

## START

In this tutorial you will create a contactform.

1. Fork this repository to your own GitHub.

2. Pull the repo to your local development environment.

3. Change index.php with the following code. Add this between the `<body>` tags.

```html
<div id="container">
    <img src="glulogo.png">
    <div id="head" style="">Mediadeveloper contactformulier</div>
        <form method="post" action="contactverwerk.php">
            <table>
            <tr><td colspan="2">Beste gebruiker, vul hier je naam en e-mail in</td></tr>
            <tr><td>Naam:</td><td><input style="font-size:125%" name="name" type="text"></td></tr>
            <tr><td>Tekst:</td><td><textarea style="font-size:125%" name="text"></textarea></td></tr>
            <tr><td>E-mail:</td><td><input style="font-size:125%" name="email" type="text" ></td></tr>
            <tr><td>&nbsp;</td><td><input style="font-size:100%" type="submit" name="submit" value="Verzenden"></td></tr>
        </form>
        </table>
    </div>
</div>
```

4. Stage, commit and push your changes.

Success!
