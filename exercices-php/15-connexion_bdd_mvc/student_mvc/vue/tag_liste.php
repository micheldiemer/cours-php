<table>

  <tr>
    <th>Nom</th>
    <th>Description</th>
  </tr>

  <?php
  foreach ($tags as $tag) { ?>
    <tr>
      <td><?= $tag['name'] ?></td>
      <td><?= $tag['description'] ?></td>
      <td><a href="<?= BASE_URL ?>tag/update/<?= $tag['id'] ?>">🖊️</td>
      <td><a href="<?= BASE_URL ?>tag/delete/<?= $tag['id'] ?>">❌</a></td>
    </tr>
  <?php } ?>
</table>