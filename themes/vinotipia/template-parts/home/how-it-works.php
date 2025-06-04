<div class="how-it-works-section">
  <h3 class="how-title">¿CÓMO FUNCIONA?</h3>

  <div class="how-cards-wrapper">
    <?php
    $steps = [
      ['1', 'Se colocan las botellas tapadas y se sirven las copas.', site_url() . '/wp-content/uploads/2025/06/paso1.png'],
      ['2', 'Cada participante recibe sus fichas de cata y se identifican las copas con stickers.', site_url() . '/wp-content/uploads/2025/06/paso2.png'],
      ['3', 'Seguí las instrucciones, usá las pistas y concentrate en los sentidos.', site_url() . '/wp-content/uploads/2025/06/paso3.png'],
      ['4', 'Comentá tus sensaciones y hacé tu predicción sobre la cepa.', site_url() . '/wp-content/uploads/2025/06/paso4.png'],
      ['5', 'Descubrí las etiquetas ocultas, contá los aciertos <strong>¡y abrí el sobre sorpresa!</strong>', site_url() . '/wp-content/uploads/2025/06/paso5.png'],
    ];

    foreach ($steps as $step) : ?>
      <div class="how-card">
        <div class="how-number"><?= $step[0]; ?></div>
        <img src="<?= $step[2]; ?>" alt="Paso <?= $step[0]; ?>">
        <p class="how-text"><?= $step[1]; ?></p>
      </div>
    <?php endforeach; ?>
  </div>

  <p class="how-footer">
    Una dinámica <strong>de 2 a 8 jugadores</strong> donde se juega con los sentidos, se comparte y se descubren emociones y cepas ocultas.
  </p>
</div>
