# DBproject
[데이터베이스 이론 및 실습] 쇼핑몰 시스템 구축

###index
기능을 한 눈에 보여주는 페이지
- 상품 등록, 판매와 구매
  <판매자>
  -주문 정보
  -상품 추가
  -상품 삭제
  -상품 가격 수정
  <주문자>
  -상품 정보
  -주문

###insert
판매하고 싶은 품목 판매
GET으로 데이터 받아옴
$type : 의류 분류 (ex. 상의, 하의, 원피스)
$productName : 상품 판매 시 의류명
$price : 가격
-> P_CUSTOMER table에 상품 정보가 담긴 새로운 레코드 INSERT

###order
GET으로 데이터 받아옴
$customerName : 구매자명
$productID : 구매상품 번호
$number : 구매 수량
주문 하나 당 한개의 품목에 대해서만 주문 가능
-> P_SELLER table에 구매 정보가 담긴 새로운 레코드 INSERT

###update
상품 가격 수정 가능 페이지 (단, 상품 판매자만 수정 가능)
P_CUSTOMER table의 데이터 UPDATE

###delete
판매자가 판매를 원하지 않는 상품을 삭제하는 페이지
productName을 GET
상품 제거 유무에 따른 안내 멘트
상품 제거 성공 : "complete deletion of product" > delete된 상품 정보를 select page에 포함시킴
상품 제거 실패 : "failed to delete product"
P_CUSTOMER table의 데이터 DELETE

###select
주문 정보를 확인하는 페이지
producID를 공통 컬럼으로 엮어 P_CUSTOMER table과 P_SELLER table을 join시킴
주문자의 주문 정보와 주문한 상품정보를 한눈에 파악 가능.

###select_product
주문자가 판매 중인 상품 정보를 확인하는 페이지
P_CUSTOMER table에서 상품 정보를 가져와 html table로 표시
