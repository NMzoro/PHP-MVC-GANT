<html>
	<head>
	<style>
			body {
				font-family: Arial, sans-serif;
				/* background-color: #f5f5f5; */
			}
			form {
				background-color: #f9f9f9;
				border: 1px solid #ccc;
				padding: 20px;
				margin: 20px auto;
				max-width: 500px;
			}
			form label {
				display: block;
				margin-bottom: 5px;
				font-weight: bold;
			}
			form input[type="text"],
			form input[type="date"],
			form textarea {
				width: 100%;
				padding: 8px;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
				margin-bottom: 10px;
				font-size: 16px;
			}
			form button[type="submit"],
			form button[type="reset"] {
				background-color: #F9B900;
				color: #fff;
				border: none;
				padding: 10px 20px;
				margin-top: 10px;
				font-size: 16px;
				cursor: pointer;
				border-radius: 4px;
				transition: background-color 0.3s ease;
			}
			h1 {
            
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            letter-spacing: 0px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            scroll-behavior: smooth;
            margin: 0;
        }

        

        h1 {
            font-size: 40px;
            transition: 2s all ease;
            cursor: pointer;
        }

        h1:hover {
            text-shadow:
                #ffffff 0 0 15px,
                #85FFBD 0 0 22px,
                #85FFBD 0 0 25px;
        }
		</style>
	</head>
	<body>
		<br><br>
		<center><h1>Ajouter une Tache</h1></center>
		<form action="TaskController/add" method="post" >
		<input type="hidden" name="projetID" value=" <?php echo $this->projetId; ?>">
		<label> Nom</label>
		<input type="text" name="nom"><br>
		<label> Date Début </label>
		<input type="date" name="debut"><br>
		<label> Date Fin </label>
		<input type="date" name="fin"><br>
		
		<button type="submit" >Envoyer</button>
		<button type="reset" >Effacer</button>
		</form>
	</body>

</html>