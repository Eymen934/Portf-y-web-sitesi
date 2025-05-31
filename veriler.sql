CREATE TABLE bilgiler (
  id INT AUTO_INCREMENT PRIMARY KEY,
  baslik VARCHAR(255),
  icerik TEXT
);

INSERT INTO bilgiler (baslik, icerik) VALUES
('Değişken Nedir?', 'Bir değişken, bir veriyi saklamak için kullanılan isimlendirilmiş alandır. Örneğin: x = 5;'),
('Kodlama ve Bilim', 'Kodlama, teknolojiyi anlamamıza ve bilimsel bilgileri işlememize yardım eder.'),
('Hayalimdeki Meslek: Yazılım Geliştirici', 'Ben gelecekte büyük projeler üreten bir yazılımcı olmak istiyorum.');
