/*mySQL*/
/*Create a cart table with productid referenced from the table product and quantity*/
CREATE TABLE cart (
  productid VARCHAR(10) NOT NULL,
  quantity INT(6),
  FOREIGN KEY (productid) REFERENCES product(productid)
)