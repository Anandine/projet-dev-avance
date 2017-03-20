This is a web development projet with Jerome Fath about scss, bootstrap, git, composer, npm, es6, etc.

<h2>Installation</h2>
<ol>
	<li><p>Install <a href="nodejs.org">Node.js</a></p></li>
	<li><p>Install <a href="https://www.sqlite.org/">SQLite</a></p></li>
	<li><p>Clone the <a href="https://github.com/Anandine/projet-dev-avance">projet-dev-avance</a> repository</p></li>
	<li><p>Install dependencies</p>
		<div class="highlight highlight-source-shell">
			<pre>$ npm install</pre>
		</div>
	</li>
	<li><p>Load articles</p>
		<div class="highlight highlight-source-shell">
			<pre>$ php cli/import.php</pre>
		</div>
	</li>
	<li><p>Load and compile the css (and Bootstrap), the js and the Fonts</p></li>
		<div class="highlight highlight-source-shell">
			<pre>
				$ npm run build:scss:main
				$ build:scss:bootstrap
				$ assets:install:bootstrap
				$ build:js:app
			</pre>
		</div>
	<li><p>Open http://localhost:8000 to view the project on your browser</p></li>
</ol>