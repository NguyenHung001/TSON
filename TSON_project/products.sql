create database TSONproject;
use TSONproject;
create table products
(
	id varchar(5) primary key,
    pd_name varchar(25) not null,
    pd_price varchar(20) not null,
    pd_detail varchar(400) not null,
    image varchar(50) not null
);
insert into products values 
(
"SP01", 
"Máy tời treo PA300-40m", 
"1800000", 
"Biến áp đổi nguồn hạ áp 3 pha Lioa 100KVA - 3K102M2DH5YC có chức năng chính là đổi điện cho các thiết bị
 công nghiệp có điện áp sử dụng theo tiêu chuẩn của Nhật, Đài Loan, Mỹ và các nhu cầu đặc biệt khác.",
 "product6.jpg"
),
(
"SP02", 
"Máy Tời Điện Treo Mini SK250", 
"9345000", 
"Biến áp đổi nguồn hạ áp 3 pha Lioa 100KVA - 3K102M2DH5YC có chức năng chính là đổi điện cho các thiết bị
 công nghiệp có điện áp sử dụng theo tiêu chuẩn của Nhật, Đài Loan, Mỹ và các nhu cầu đặc biệt khác.",
 "product7.webp"
),
(
"SP03", 
"Tời Nhanh Đa Năng 750/1500Kg", 
"5100000", 
"Biến áp đổi nguồn hạ áp 3 pha Lioa 100KVA - 3K102M2DH5YC có chức năng chính là đổi điện cho các thiết bị
 công nghiệp có điện áp sử dụng theo tiêu chuẩn của Nhật, Đài Loan, Mỹ và các nhu cầu đặc biệt khác.",
 "product8.jpg"
),
(
"SP04", 
"Máy phát điện siêu lạ", 
"7600000", 
"Biến áp đổi nguồn hạ áp 3 pha Lioa 100KVA - 3K102M2DH5YC có chức năng chính là đổi điện cho các thiết bị
 công nghiệp có điện áp sử dụng theo tiêu chuẩn của Nhật, Đài Loan, Mỹ và các nhu cầu đặc biệt khác.",
 "product1.webp"
),
(
"SP05", 
"Thiết bị tiết kiệm điện", 
"6000000", 
"Biến áp đổi nguồn hạ áp 3 pha Lioa 100KVA - 3K102M2DH5YC có chức năng chính là đổi điện cho các thiết bị
 công nghiệp có điện áp sử dụng theo tiêu chuẩn của Nhật, Đài Loan, Mỹ và các nhu cầu đặc biệt khác.",
 "product2.webp"
),
(
"SP06", 
"Vi xử lý TSON", 
"1430000", 
"Biến áp đổi nguồn hạ áp 3 pha Lioa 100KVA - 3K102M2DH5YC có chức năng chính là đổi điện cho các thiết bị
 công nghiệp có điện áp sử dụng theo tiêu chuẩn của Nhật, Đài Loan, Mỹ và các nhu cầu đặc biệt khác.",
 "product3.webp"
),
(
"SP07", 
"Thiết bị thông minh 01", 
"2200000", 
"Biến áp đổi nguồn hạ áp 3 pha Lioa 100KVA - 3K102M2DH5YC có chức năng chính là đổi điện cho các thiết bị
 công nghiệp có điện áp sử dụng theo tiêu chuẩn của Nhật, Đài Loan, Mỹ và các nhu cầu đặc biệt khác.",
 "product4.webp"
),
(
"SP08", 
"Biến áp đổi nguồn hạ áp", 
"4700000", 
"Biến áp đổi nguồn hạ áp 3 pha Lioa 100KVA - 3K102M2DH5YC có chức năng chính là đổi điện cho các thiết bị
 công nghiệp có điện áp sử dụng theo tiêu chuẩn của Nhật, Đài Loan, Mỹ và các nhu cầu đặc biệt khác.",
 "product7.webp"
);

select * from products;
truncate products;