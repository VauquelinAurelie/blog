SELECT*
FROM
    articles
        INNER JOIN
    authors
    ON
        articles.authors_id = authors.id
WHERE
    articles.id < 11
  AND
    publication >2023-03-10
ORDER BY
    articles.id ASC