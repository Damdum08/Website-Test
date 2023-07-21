<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <title>Objet</title>
        <meta charset="utf-8">
    </head>
    <tbody>
        <h1>Class objet suite</h1>
        <script>
            class VideoGame {
                constructor(title, releaseDate, genre) {
                    this.title = title;
                    this.releaseDate = releaseDate;
                    this.genre = genre;
                }

                summary() {
                    console.log(`${this.title} (${this.releaseDate}) - Genre: ${this.genre}`);
                }
            }

            const game = new VideoGame("The Legend of Zelda: Breath of the Wild", "2017", "Action-adventure");
            game.summary(); // affiche "The Legend of Zelda: Breath of the Wild (2017) - Genre: Action-adventure"
        </script>

        <div class="button-container">
			<button onclick="goBack()" class="button"> Retour </button>
					<script>
							function goBack() {
									window.history.back();
							}
					</script>
		</div>
    </tbody>
</html>