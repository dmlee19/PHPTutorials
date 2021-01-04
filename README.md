# PHPTutorials
---
`Youtube [The Net Ninja]체널 PHP Tutorials for Begginers 강의를 보고 공부한 내용입니다.`
---

1. Basic

- Constants
- Variables
- Html 안에서 php 삽입하여 출력

---

2. Data Types

- String
  - 선언, 기본 함수
- Number
  - 선언, 기본 함수
- Boolean
  - 선언, 기본 함수
- "" vs ''

---

3. Arrays

- Indexed Arrays
  - 입력, 출력, 수정, 삭제
- Associative Arrays (key & value pairs)
  - 입력, 출력, 수정, 삭제

---

4. Loops

- For
- Foreach
- while

---

5. Conditional Statements

- If, Else if

---

6. Conditional Statements_Break, Countinue

- Break
  - 해당 부분에서 반복문 중단
- Countinue
  - 해당 부분에서 이후 코드 실행하지 않고 다음 반복 실행

---

7. Functions

- 사용자 정의 함수
- Variable Scope
  - Local Variable
    - 함수 내부에서 선언된 변수는 함수 내에서 사용 후 삭제
  - Global Variable
    파일 전체에서 사용 가능한 변수
    함수 내에서 Global variable 사용 - Global $variable;
            - function(&$variable){}

---

8. Include and Require

- 여러 파일에 반복적으로 사용되는 UI나 처리 내용을 따로 구현하여 재사용이 가능
  - Include
    - Warning : include file 관련 오류가 있더라도 나머지 소스는 실행
  - Require
    - Fatal Error : require file 관련 오류가 있는 경우 실행 중지

---

9. Ternery Operators

- Alternative If Statement
  `$score > 40 ? 'high score' : 'low score';`
  위와 같은 한 줄의 코드로 if문 구현 가능

---

10. Superglobal

- GET, POST
  - 클라이언트에서 데이터를 전송할 때, 방식(GET, POST)에 따라 superglobal 사용
  - GET: URL을 통해서 Data 전송 (보안에 취약)
  - POST: Request 메모리에 저장하여 전송
- SERVER
  - Name, Method, 경로 등 서버 속성 확인
- SESSION
  - 서버에 저장되어 서로 다른 페이지에서 사용 가능
  - 설정, 저장, 접근, 삭제
  - Pizza project header에 적용
- COOKIE
  - User Local에 저장되어 사용 (행동 유형 파악, 마케팅 등에 사용)
  - 설정, 저장, 접근, 삭제
  - Pizza project header에 적용

---

11. File System

- file
  - 열기, 생성, 수정, 읽기, 경로확인, 크기 확인 등 파일 관련 함수

---

12. Classes

- 객체 지향을 위한 Class 구현, 접근 방법 소개

---

**Project**

**Pizza Project**

- Pizza 메뉴를 보여주고 (Main), 추가하고 (AddPizza), 상세 내용을 확인하고, 삭제하는 (Detail) 기능을 구현한 프로젝트
- PHP, MySQLi, HTML, CSS, Materialize(CSS)
- 구성
  - PizzaProject_Main
    - DB에 저장된 모든 Pizza 출력
    - MySQLi Select 문
    - **UI**
    
    ![Main UI](https://raw.githubusercontent.com/dmlee89/PHPTutorials/master/UI/Main.JPG)
  - PizzaProject_AddPizza
    - Superglobal POST 사용 (email, title, ingredients)
    - input data 형식 체크 및 에러 메세지 설정 및 출력
    - **UI**
    
    ![AddPizza UI](https://raw.githubusercontent.com/dmlee89/PHPTutorials/master/UI/AddPizza.JPG)
  - PizzaProject_Datail
    - Superglobal GET 사용 (id)
      - 상세내용 출력 (MySQLi Select)
    - Superglobal POST 사용 (id)
      - 해당 메뉴 삭제 (MySQLi Delete)
    - **UI**
    
    ![Detail UI](https://raw.githubusercontent.com/dmlee89/PHPTutorials/master/UI/Detail.JPG)
    - PizzaProject_Header
      - Session에 저장된 name 불러오기
      - Cookie에 저장된 gender 불러오기
    - **UI**
     ![Header UI](https://raw.githubusercontent.com/dmlee89/PHPTutorials/master/UI/Header.JPG)
    - PizzaProject_Footer
    - **UI**
    
    ![Footer UI](https://raw.githubusercontent.com/dmlee89/PHPTutorials/master/UI/Footer.JPG)
    - ConnectDB
      - Main, AddPizza, Detail 파일에 include 되어 DB 연결 관리
