CREATE TABLE IF NOT EXISTS travelexpenses
(
  id INT,
  category VARCHAR(30) NOT NULL,
  price DECIMAL(6,2),
  amount INT
);
