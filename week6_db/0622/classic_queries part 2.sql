27) Who is the customer who paid the most
(total payments)?

select c.`customerName` as Customer_Name
,format(sum(od.`quantityOrdered` * od.`priceEach`),2) as Total_Amt_Paid
from `orderdetails` od
join `orders` o
join `customers` c
on od.`orderNumber` = o.`orderNumber`
and o.`customerNumber` = c.`customerNumber`
and o.`status` in ('Shipped','Resolved')
group by c.`customerName`
having sum(od.`quantityOrdered` * od.`priceEach`) = 
	(SELECT max(o2.Amt_Paid)
       FROM (SELECT sum(od.`quantityOrdered` * od.`priceEach`) as Amt_Paid
               from `orderdetails` od
               join `orders` o
               join `customers` c
               on od.`orderNumber` = o.`orderNumber`
               and o.`customerNumber` = c.`customerNumber`
               and o.`status` in ('Shipped','Resolved')
               group by c.`customerName`) as o2)

SELECT c.`customerName` as Customer_Name,
format(sum(p.`amount`),2) as Total_Payments
FROM `payments` p
join `customers` c
on p.`customerNumber` = c.`customerNumber`  
group by p.`customerNumber`
order by sum(p.`amount`) desc
limit 1


28) Who are the employees who 
do not serve any customer?

SELECT distinct concat(e.`firstName`,' ',e.`lastName`) as Employee_Name
,c.`salesRepEmployeeNumber`
FROM `employees` as e 
left join `customers` as c
on c.`salesRepEmployeeNumber` = e.`employeeNumber`
where c.`salesRepEmployeeNumber` is null


29) How many products per product line?

SELECT p.`productLine` as Product_Line
,count(p.`productLine`) as Product_Count
FROM `productlines` l join `products` p
on p.`productLine` =  l.`productLine`
GROUP BY p.`productLine`

SELECT `productLine` as Product_Line
,count(`productName`) as Product_Count
FROM `products`
group by `productLine`


30) List names of employees and number of customers they serve

SELECT concat(e.`firstName`,' ',e.`lastName`) as Employee_Name
#,count(*) Customer_Count => This will count the null as 1
,count(c.`salesRepEmployeeNumber`) Customer_Count
FROM `employees` as e 
left join `customers` as c
on c.`salesRepEmployeeNumber` = e.`employeeNumber`
group by Employee_Name
order by Customer_Count Desc


31) Insert 2 entries into Offices table

INSERT INTO OFFICES (OFFICECODE
					,CITY
					,PHONE
					,ADDRESSLINE1
					,ADDRESSLINE2
					,STATE
					,COUNTRY
					,POSTALCODE
					,TERRITORY)
			VALUES (8
				 	,'Quezon City'
					,'5555'
					,'3rd Floor Caswynn Bldg'
					,'Sacred Heart'
					,'NCR'
					,'Philippines'
					,'1105'
					,'APAC')


INSERT INTO OFFICES (OFFICECODE
					,CITY
					,PHONE
					,ADDRESSLINE1
					,ADDRESSLINE2
					,STATE
					,COUNTRY
					,POSTALCODE
					,TERRITORY)
			VALUES (9
				 	,'Mandaluyong'
					,'86236'
					,'11th Floor Manulife Bldg'
					,'Addition Hills'
					,'NCR'
					,'Philippines'
					,'1110'
					,'APAC')

INSERT INTO OFFICES (OFFICECODE
					,CITY
					,PHONE
					,ADDRESSLINE1
					,ADDRESSLINE2
					,STATE
					,COUNTRY
					,POSTALCODE
					,TERRITORY)
			VALUES (10
				 	,'Basilan'
					,'12345'
					,'Maute Street'
					,null
					,null
					,'Philippines'
					,'1110'
					,'APAC')


32) Add a customer entry and add to Loui Bondur (1337) to be sales rep

Insert into Customers (customerNumber
,customerName
,contactLastName
,contactFirstName
,phone
,addressLine1
,addressLine2
,city
,state
,postalCode
,country
,salesRepEmployeeNumber
,creditLimit)

values(497
,'Tweet Inc'
,'Nuza'
,'Angela'
,'87000'
,'3F Caswynn Bldg'
,'Timog Ave, Sacred Heart'
,'Quezon City'
,null
,'1105'
,'Philippines'
,1337
,20000)


33) Update extension for all Sales Rep to x003

Update employees
Set extension = 'x003'
where jobTitle = 'Sales Rep'


34) Delete entries you added in Offices table

delete from offices 
	where officeCode in (8,9,10)

delete from offices 
	where officeCode = 8
	or officeCode = 9
	or officeCode = 10