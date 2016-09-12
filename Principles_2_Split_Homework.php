<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Principles Exam 8</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Which of the following is a characteristic of a business-format franchise:</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. The name of the business is chosen by the franchisee.</option><option value="B">B. Products are bought directly from the supplier.</option><option value="C">C. It is the least popular franchise arrangement.</option><option value="D">D. Continuous assistance is provided by the franchisor.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is D: Continuous assistance is provided by the franchisor.</h5><h5>A business-format franchise is a more complex and
more popular type of franchise arrangement than the product trade-name franchise. It involves a close,
continuous, working relationship between the franchisor and the franchisee. Examples of the businessformat franchise are McDonald's, Holiday Inn, and Jiffy Lube. Products and other materials usually must
be purchased from the franchisor's list of approved vendors. The franchisee must operate under the
trade name of the franchisor.
</h5></div><h5 id='q2'>2. What should business employees possess in order to extract relevant information from written materials?</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Ability to listen</option><option value="B">B. Limited vocabularies</option><option value="C">C. Good reading skills</option><option value="D">D. Effective speaking voice</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is C: Good reading skills</h5><h5>All business employees need to possess basic reading skills. However, employees
who are required to extract relevant information from written materials should possess good reading skills
because some of the materials may contain complex information that is difficult to understand. Good
reading skills include the ability to focus on the content and analyze and evaluate the meaning of the
message. Employees who possess good reading skills usually have extensive vocabularies and are
willing to look up the meaning of unfamiliar words. Possessing the ability to listen or an effective speaking
voice will not help employees to extract relevant information from written materials.
</h5></div><h5 id='q3'>3. What type of information should employees be able to locate in their company's employee handbook?</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. The company's annual report</option><option value="B">B. The company's list of current job openings</option><option value="C">C. The use of company property</option><option value="D">D. The number of vacation days that an employee has taken</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is C: The use of company property</h5><h5>Businesses often develop employee handbooks, which provide
information about their general policies and procedures. Employee handbooks are usually given to new
employees when they are hired. Employee handbooks usually provide information about overtime and
vacation policies, disciplinary and grievance procedures, pay schedules, dress codes, and behavioral
expectations in its employee handbook. Many employee handbooks include information about employees
and their personal use of company property. Company-property issues that the handbook might address
include making personal long-distance phone calls on the company phone and using the office copy
machine or laser printer for non-business purposes. Lists of the company's current job openings and
personal information about vacation days are usually available through the human-resources department,
and are not included in the employee handbook. Additionally, the company's annual report is not usually
included in the employee handbook. Often, corporations post their annual reports on the company's web
site.
</h5></div><h5 id='q4'>4. Millie is reading a book to learn how to knit. She wants to make her sister a scarf for Christmas, but it's
only a week away, and she doesn't have much time. Millie decides to skip ahead of the directions, and
the scarf winds up looking more like a potholder. Which of the following tips for following directions did
Millie ignore:</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Accept responsibility</option><option value="B">B. Know when to speak</option><option value="C">C. Don't rush</option><option value="D">D. Note key words</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is C: Don't rush</h5><h5>When Millie skips ahead of the knitting directions in her book, she is rushing forward without
all the information she needs to make the scarf. Reading and following directions is not a race. Taking
your time and following the steps provided will ensure that you don't leave something out or do
something incorrectly. This improves your chances of doing it right. In this situation, Millie is not ignoring
the tips to know when to speak, accept responsibility, or note key words.
</h5></div><h5 id='q5'>5. Which of the following is a guideline for effective verbal communication:</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Keep the voice at the same pitch</option><option value="B">B. Use speech mannerisms</option><option value="C">C. Try to avoid eye contact</option><option value="D">D. Use gestures for emphasis</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is D: Use gestures for emphasis</h5><h5>Appropriate gestures can help to emphasize the point the speaker wants to
make, and they are an important part of effective verbal communication. Speech mannerisms are
distracting to listeners and should be avoided. The tone of the voice should be modulated, or changed, to
prevent the speaker from sounding monotonous. Eye contact with listeners is important in maintaining
communication and making them feel the speaker is addressing them personally.
</h5></div><h5 id='q6'>6. The most effective way to interpret others' nonverbal cues often is to look at their</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. facial expressions.</option><option value="B">B. leg movements.</option><option value="C">C. clothing style.</option><option value="D">D. office decor.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is A: facial expressions.</h5><h5>Nonverbal cues are communication that involves the use of gestures or facial
expressions, rather than the use of words. Facial expressions usually are the most important aspect of
nonverbal cues or body language. For example, when people feel emotions such as happiness or anger,
those emotions are expressed through smiles, frowns, and eye patterns. It is easy to see that someone is
happy if s/he is smiling. Leg movements are a type of body language; however, they are not as effective
a way to interpret nonverbal cues. Clothing style and office decor are nonverbal cues also, but they are
not as easy to interpret as facial expressions.
</h5></div><h5 id='q7'>7. When giving verbal directions to employees about how to complete a task, it is often helpful to</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. speak softly.</option><option value="B">B. use visuals.</option><option value="C">C. use complex words.</option><option value="D">D. limit body language.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is B: use visuals.</h5><h5>It is often more difficult to give verbal directions than to provide written directions unless the
information is fairly simple or familiar to the audience. To overcome the problem of giving verbal
directions, it is often helpful to use visuals such as diagrams or charts. The visuals reinforce the verbal
directions and help the audience to understand the explanation. It is not helpful to speak softly, use
complex words, or limit body language when giving verbal directions. These actions may make it more
difficult for the audience to understand the directions.
</h5></div><h5 id='q8'>8. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1068

BUSINESS ADMINISTRATION CORE EXAM

1

1. Which of the following is a characteristic of a business-format franchise:</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. a transition.</option><option value="B">B. an effective conclusion.</option><option value="C">C. defending an idea objectively.</option><option value="D">D. expressing a cultural barrier.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: expressing a cultural barrier.</h5><h5>procedures, survey methods, or management policies to be able to store and analyze data for
the purpose of making business decisions.
</h5></div><h5 id='q9'>9. What is an advantage to a business of encouraging employees to participate in group discussions?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Many opinions increase the chances of developing useful recommendations.</option><option value="B">B. It makes it easier to reach a unanimous decision.</option><option value="C">C. Less conflict is likely to occur when discussing controversial issues.</option><option value="D">D. The participants' input usually helps the business to resolve problems quickly.</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is A: Many opinions increase the chances of developing useful recommendations.</h5><h5>Many businesses
encourage employees to participate in group discussions to analyze problems and find solutions. The
advantage is that when employees share many different opinions, there is an increase in the chance of
developing useful recommendations. However, the group leader needs to encourage participation, and
make all members feel comfortable so they will express their ideas and opinions. A disadvantage of
group discussions is that conflict is more likely to occur when more people express different opinions,
especially about controversial issues. Group discussions do not always lead to decisions in which all
participants agree, nor do they always help the business solve problems quickly.
</h5></div><h5 id='q10'>10. When taking notes during a seminar, a businessperson should write down</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. all details.</option><option value="B">B. information of interest.</option><option value="C">C. key points.</option><option value="D">D. inaccurate statements.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is C: key points.</h5><h5>Effective note-taking involves writing down the most important information or key points for
future reference. A person generally speaks faster than another person writes, so it would be difficult for
a person to write down every detail or word the speaker says. The key points cited during a seminar may
or may not be of interest to the businessperson. Inaccurate statements should not be cited during a
seminar.
</h5></div><h5 id='q11'>11. Using a table to present or summarize data in a written document is most appropriate when</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. the data are too complex to describe in the body of the text.</option><option value="B">B. it is important to build credibility and impress the audience.</option><option value="C">C. the report does not require a bibliography.</option><option value="D">D. it is placed in the appendices of a complex report.

®
</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: the data are too complex to describe in the body of the text.</h5><h5>Tables present text or numbers in a grid
format. The table allows readers to see groups of data together for comparison. Tables are also useful
because they summarize data in an easy to read format. Tables present data (e.g., statistics) that may be
too wordy or complex to describe in a paragraph format. Tables should appear in a document where they
are most appropriate, which may be the body, conclusions, recommendations, or appendices. The
inclusion of a bibliography is not a factor when determining if a table should be included in the document.
The primary purpose of tables is to provide information, which may or may not build credibility and
impress the audience.
</h5></div><h5 id='q12'>12. A business that writes letters to customers to confirm their orders or requests should make sure that the
letters contain</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. a map of all business locations.</option><option value="B">B. product ratings and grades.</option><option value="C">C. exchange rates.</option><option value="D">D. all the necessary information.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is D: all the necessary information.</h5><h5>When preparing written communication, one of the most important rules is
to be thorough and provide all the necessary information because the receiver may not have the
opportunity to ask questions in person. Letters confirming customer orders should answer the questions
of who, what, when, and where by including specific information about ordered items, quantity, delivery
address, etc. The letters should contain all the necessary information to verify that what the business
intends to provide is exactly what the customers have requested. Whether product ratings and grades,
exchange rates, and a map of all business locations are necessary information to include in a
confirmation letter depends on the type of business and the customer's needs.
</h5></div><h5 id='q13'>13. The primary purpose of placing headings and subheadings in a long business report is to</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. provide supporting evidence for key points.</option><option value="B">B. attract attention to the writer's hidden agenda.</option><option value="C">C. organize content in a cohesive, manageable way.</option><option value="D">D. solicit an opinion or response from the audience.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is C: organize content in a cohesive, manageable way.</h5><h5>Long business reports often contain a lot of
information about different topics. To organize the information so the audience can understand the
report's contents, report writers often break content into chunks of related information. Headings and
subheadings are often included before the section or topic to let the audience know the issue at hand.
Headings and subheadings do attract attention because they are often formatted with a larger or colorcoded font; however, the primary purpose is not to convey a hidden agenda, provide supporting
evidence, or solicit an opinion from the audience.
</h5></div><h5 id='q14'>14. Which of the following information should be included in the inside address section of a business letter:</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Message</option><option value="B">B. Subject</option><option value="C">C. Date</option><option value="D">D. Title</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is D: Title</h5><h5>The inside address section of a business letter should include the addressee's title, which might be
both a courtesy title and a job title, if known. A courtesy title such as Mr. or Ms. should always be used
and, whenever possible, a job title such as manager or president. A correct inside address with title is as
follows: Mr. John Doe, President. The subject, date, and message are not part of the inside address
section of a business letter.
</h5></div><h5 id='q15'>15. When writing informational messages, it is most important to communicate</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. an honest opinion.</option><option value="B">B. emotional appeal.</option><option value="C">C. accurate content.</option><option value="D">D. a request for action.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is C: accurate content.</h5><h5>Because informational messages communicate knowledge, facts, or data to the
message receiver, it is important that content is accurate. In the workplace, employees and managers
often make business decisions based on information they receive in informational messages, so it is very
important for the writer to include accurate content in the message. Although a writer might communicate
an emotional appeal, an honest opinion, or a request for action in his/her informational message,
accurate content is the most important consideration.
</h5></div><h5 id='q16'>16. What type of information should a business include when writing a sales proposal to send to a customer?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Shipping and receiving</option><option value="B">B. Features and benefits</option><option value="C">C. Pricing and accounting</option><option value="D">D. Laws and regulations</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is B: Features and benefits</h5><h5>When they are planning on making large or expensive purchases, some business
customers ask the business to submit written sales proposals. Because the goal of the proposal is to
make a sale, a well-written proposal will tell the customer the benefits of purchasing the business's
products. The sales proposal should also point out the specific features of the products which may be
different from the features of a competitor's product. The proposal might include shipping information, but
receiving is controlled by the customer. The proposal usually includes pricing information but not
accounting information. Laws and regulations usually are not part of a sales proposal unless the product
is one that is regulated by the government.
</h5></div><h5 id='q17'>17. Which of the following is not a good technique for participating in a staff meeting:</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Understand the goal of the meeting prior to its start</option><option value="B">B. Contribute at least one opinion to every staff meeting in which you participate</option><option value="C">C. Avoid arguing with other participants, even if you strongly disagree with their point of view</option><option value="D">D. Follow the instructions of the group leader, even if you have a better idea for organizing the
meeting</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is B: Contribute at least one opinion to every staff meeting in which you participate</h5><h5>While contributing is
important, it should only be done if you have something meaningful to contribute. Setting goals for the
number of times you speak up during a meeting can lead to time spent on unnecessary discussions. It is
important to understand the purpose of the meeting prior to attending so that you can think about any
contributions you can make about the topics to be covered. It is inevitable that conflicting viewpoints will
surface during meetings. Always be courteous and respectful of both the leader and the other
participants. This includes behaving professionally when differing points of view are addressed to avoid
arguments.
</h5></div><h5 id='q18'>18. A customer asks Roger a question about a product, and he isn't sure of the correct answer. He
immediately phones his supervisor to get the needed information. Which technique for building positive
customer relations does this illustrate?</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. Pay attention to internal customers.</option><option value="B">B. Keep your promises.</option><option value="C">C. Be helpful.</option><option value="D">D. Be thankful.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is C: Be helpful.</h5><h5>Roger is displaying helpfulness to this customer. He didn't know the answer to the customer's
question, but he immediately went into action to find the person who did. This situation does not illustrate
keeping promises, paying attention to internal customers (employees), or being thankful.
</h5></div><h5 id='q19'>19. One way that employees can provide efficient, quick service to customers is by being</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. forceful.</option><option value="B">B. organized.</option><option value="C">C. detached.</option><option value="D">D. aggressive.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is B: organized.</h5><h5>Employees should always be well organized and prepared to provide customer service in a
quick, convenient manner. Customers don't have a lot of time to waste. They expect employees to be
knowledgeable about company goods and services, organized, and ready to work. Being organized will
help employees to focus on serving customers. Employees should not be forceful or aggressive when
dealing with customers. Employees who are detached give the impression of not caring about customers.
</h5></div><h5 id='q20'>20. Kate's coworker Jack is meeting with a very important German client tomorrow. Kate has been to
Germany several times, and tells Jack that German businesspeople tend to be very formal and serious in
business situations. After learning this information, Jack now knows that he should avoid</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. shaking hands.</option><option value="B">B. using titles.</option><option value="C">C. using humor.</option><option value="D">D. making eye contact.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is C: using humor.</h5><h5>Because Germans tend to be very formal and serious about their business, they do not find
it appropriate to use humor during business situations. It is appropriate to use titles, shake hands, and
make eye contact with Germans in business situations. These behaviors are respectful to Germans.
</h5></div><h5 id='q21'>21. Business policies that focus on meeting consumers' wants and needs while making a fair profit for the
business are primarily intended to</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. keep operations running smoothly.</option><option value="B">B. guide employees' actions.</option><option value="C">C. reduce misunderstandings.</option><option value="D">D. satisfy customers.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is D: satisfy customers.</h5><h5>Employees should not be forceful or aggressive when
dealing with customers. Employees who are detached give the impression of not caring about customers.
</h5></div><h5 id='q22'>22. Carrie has a summer job cleaning and maintaining backyard pools. Her boss thinks she does a great job.
Today, she has a new client. For a while, he was watching her from the porch, and then he came out and
stood just a few feet away from her. "Don't do it that way," he instructed. "You're using too much chlorine.
Should I just measure it out for you?" Carrie's customer is</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. suspicious.</option><option value="B">B. slow/methodical.</option><option value="C">C. domineering/superior.</option><option value="D">D. irritable/moody.

</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is C: domineering/superior.</h5><h5>Carrie's customer is domineering/superior. He's talking down to her and giving her
orders on how to do her job. A slow/methodical customer is indecisive or just takes a long time to make
up his/her mind. A suspicious customer questions everything and is constantly worried that your business
might take advantage of him/her. An irritable/moody customer is unpredictable—s/he might be your best
friend one day and a real crab the next.
</h5></div><h5 id='q23'>23. Which of the following are the three major areas of customer complaints:</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. Labeling, faulty design, and mispricing</option><option value="B">B. Improper decisions, oversight, and service</option><option value="C">C. Product, personnel, and the business</option><option value="D">D. Poor service, inaccurate forms, and rudeness</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is C: Product, personnel, and the business</h5><h5>Customer complaints can generally be divided into three general
areas—the product, the business's employees, and the business itself. Product complaints result when
products are defective, the wrong size or color, damaged or spoiled, don't meet customers' needs, or are
mispriced. Complaints about employees come from the use of high-pressure selling techniques,
rudeness, lack of product knowledge, inaccuracy, and poor service. Customer complaints against the
business itself are generally related to the business's policies and procedures.
</h5></div><h5 id='q24'>24. Which of the following is a consumer good:</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. Point-of-sale terminal</option><option value="B">B. Display racks
</option><option value="C">C. Children's apparel</option><option value="D">D. Employee uniforms
</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is C: Children's apparel</h5><h5>Consumer products, such as children's apparel, are defined as those economic goods
and services that are purchased and used by the ultimate consumer. The other alternatives would all be
considered capital products because they are purchased by businesses for use in their operations.
</h5></div><h5 id='q25'>25. The gap between unlimited desires for products and limited resources is known as</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. conservation.</option><option value="B">B. scarcity.</option><option value="C">C. abundance.</option><option value="D">D. unemployment.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is B: scarcity.</h5><h5>Because of scarcity, choices must be made about which goods and services will be produced.
Conservation promotes careful use of scarce resources in order to make them last longer.
Unemployment is an economic condition in which individuals are not currently working in a gainful
capacity. Abundance is an ample supply of any commodity, or the opposite of scarcity.
</h5></div><h5 id='q26'>26. A refinery in Houston processes crude oil into gasoline and delivers it to a service station in California.
Which two types of utility are being created in this situation?</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Place and time</option><option value="B">B. Form and time</option><option value="C">C. Form and place</option><option value="D">D. Time and possession</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is C: Form and place</h5><h5>Processing crude oil into gasoline creates form utility because the raw material is
changed into a useful form. Delivering gasoline to a service station creates place utility because the good
is made available at the place where it is needed by consumers. Time utility is created when a product is
made available when the customer needs it. Possession utility, or the completion of a transaction, has
occurred, but time utility has not.
</h5></div><h5 id='q27'>27. When the price of a product is high, consumer demand will usually be</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. high.</option><option value="B">B. low.</option><option value="C">C. unchanged.</option><option value="D">D. about average.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is B: low.</h5><h5>There is an inverse relationship between consumer demand and the price of the product. In other
words, the higher the price of a product, the lower the consumer demand for it will be.
</h5></div><h5 id='q28'>28. Social responsibility is the duty of business to</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. contribute to the well-being of society.</option><option value="B">B. provide social activities for employees.
</option><option value="C">C. contribute to product development.</option><option value="D">D. provide educational loans to employees.
</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is A: contribute to the well-being of society.</h5><h5>Businesses can show their social responsibility by maximizing
their profits and/or contributing to public interests. While some businesses do provide certain social
activities for employees, or may have a credit union from which employees can obtain loans for various
purposes, these are not duties of social responsibility. Contributing to product development would benefit
the business, not society.
</h5></div><h5 id='q29'>29. Taking the profits from the businesses it owns is one way that the government of a __________ economy
obtains capital.</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. communist command</option><option value="B">B. free enterprise</option><option value="C">C. market</option><option value="D">D. traditional</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is A: communist command</h5><h5>In a communist command economy, capital for business investment is provided
by the government, which obtains it by taking the profits of businesses it owns and by levying taxes. The
government owns the businesses and controls the economy; therefore, it receives all the profits. The
people are not allowed to invest in the economy. In a traditional economy, people produce only what they
must have in order to exist. In a free enterprise or a market economy, the means of production and
distribution are owned and controlled by individuals and businesses.
</h5></div><h5 id='q30'>30. Income from sales minus the cost of merchandise sold calculates a business's</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. gross domestic product.</option><option value="B">B. operating expenses.</option><option value="C">C. net profit or loss.</option><option value="D">D. gross profit on sales.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is D: gross profit on sales.</h5><h5>After gross profit is calculated, the costs of running the business (known as
operating expenses) are subtracted from gross profit to determine whether the business has a net profit
or a loss. When your business's operating expenses are greater than your gross profit on sales, a net
loss results. The gross domestic product is the final market value of the total output of all goods and
services produced within a country's geographic boundaries during a year's time.
</h5></div><h5 id='q31'>31. One way in which government protects private property is to provide</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. fire insurance policies.</option><option value="B">B. local governmental programs.</option><option value="C">C. Federal Reserve Banks.</option><option value="D">D. patents or copyrights.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is D: patents or copyrights.</h5><h5>The government issues patents or copyrights to inventors and artists to protect
their work. Although the government provides local governmental programs, this response is not specific
enough to be correct for protecting private property. Federal Reserve Banks are used by local banks for
their banking functions. They do not provide protection for local property. Local governments provide fire
protection through fire departments, not through fire insurance.
</h5></div><h5 id='q32'>32. Which of the following is most likely to help any business reach maximum productivity:</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. Using one-way communication to inform workers</option><option value="B">B. Making managers responsible for all decisions</option><option value="C">C. Offering inflexible work schedules and overtime hours</option><option value="D">D. Combining well-qualified workers and efficient job methods</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is D: Combining well-qualified workers and efficient job methods</h5><h5>Productivity is the amount and value of
goods and services produced (outputs) from set amounts of resources (inputs). In order for a business to
achieve maximum productivity, it must hire well-qualified workers, train them in efficient job methods, and
provide them with up-to-date equipment. Productivity also increases when businesses use two-way
communication, involve employees in the decision-making process, and offer flexible work schedules and
overtime hours.
</h5></div><h5 id='q33'>33. Emotional intelligence is especially important today because</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. everyone can be a world traveler and see other cultures.</option><option value="B">B. our culture is more relaxed and free.</option><option value="C">C. people need to interact in more secure business environments.</option><option value="D">D. collaboration is becoming a standard method of achieving business goals.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is D: collaboration is becoming a standard method of achieving business goals.</h5><h5>Collaboration is used more
and more to achieve business goals. You can see this in the frequent use of teams, group projects, and
joint ventures. Our culture is not more relaxed and free; it is busier than ever. Emotional intelligence does
not ensure a more secure business environment. And, even though more people can be world travelers
and see other cultures, emotional intelligence is also important for people who do not travel.
</h5></div><h5 id='q34'>34. Visualizing yourself as you would like to be is a technique that</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. is seldom rewarding.</option><option value="B">B. does not work well.</option><option value="C">C. takes time and practice.</option><option value="D">D. is quick and easy to learn.

</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is C: takes time and practice.</h5><h5>Visualization is the practice of imagining yourself in possession of a present or
desired strength. It is not always learned quickly or easily, but it does work well and can be very
rewarding.
</h5></div><h5 id='q35'>35. A restaurant developed a new recipe for its beef ribs, which it wished to keep secret. When interviewing
potential employees to prepare the ribs, what personal trait would be the most important to the
restaurant?</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Tact</option><option value="B">B. Loyalty</option><option value="C">C. Industry</option><option value="D">D. Initiative</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is B: Loyalty</h5><h5>Loyalty to a job means keeping confidential any information about a business that is not
supposed to be public knowledge. Trade secrets are very important to some businesses. Tact is the
ability to express your ideas and opinions so that they do not hurt or offend others. Industry is diligence.
Initiative is enterprise and determination. Tact, industry, and initiative do not deal with keeping trade
secrets confidential.
</h5></div><h5 id='q36'>36. One way employees can demonstrate initiative is by handling __________ situations effectively.</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. unexpected</option><option value="B">B. regular</option><option value="C">C. routine</option><option value="D">D. training</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is A: unexpected</h5><h5>Initiative is willingness to act without having to be told to do so. An excellent way to show
initiative is to handle emergency and other unusual situations on your own. An example might be filling in
for a coworker who is ill. Handling regular, routine, or training situations does not reflect initiative.
</h5></div><h5 id='q37'>37. Phyllis was on her way to work one morning when she was involved in an accident. Phyllis used her cell
phone to call the police. In order to act responsibly, Phyllis should also immediately call</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. auto-body shops for insurance estimates.</option><option value="B">B. a tow truck to pick up her car.</option><option value="C">C. a rental agency to get a car.</option><option value="D">D. work to let them know where she is.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is D: work to let them know where she is.</h5><h5>Calling work right away is responsible behavior because it gives the
business a chance to make any arrangements that are necessary to cover necessary responsibilities.
Calling for a tow truck, insurance estimates, or a rental car are later steps that may need to be taken.
</h5></div><h5 id='q38'>38. Because Paul always tries to do what is right, his friends consider him to be a person who has</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. dignity.</option><option value="B">B. integrity.</option><option value="C">C. conflicts.</option><option value="D">D. commitment.</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is B: integrity.</h5><h5>Integrity is adhering to an established set of personal ethics. Ethics give people standards by
which they can judge situations and decide what is the right thing to do. Dignity is pride. Conflicts are
disagreements. Commitment is dedication or devotion to something or someone.
</h5></div><h5 id='q39'>39. Susan is a purchasing manager for a manufacturer. On Monday, Susan received a call from the plant
manager, who frantically told Susan that the production line ran out of 3/8” washers, which has forced
production to stop. Because Jason is the senior buyer in charge of ordering the washers, Susan set up a
meeting with Jason to discuss the problem. During the meeting, Susan asked Jason to explain why the
washers were out of stock. Jason replied, “Well, I told the office assistant to check the inventory. It's not
my fault that we don't have the washers in stock.” What is Jason doing?</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Blaming another person for his mistake</option><option value="B">B. Helping Susan to resolve the problem</option><option value="C">C. Providing Susan with a valid reason for the stock-out</option><option value="D">D. Denying that a problem exists</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is A: Blaming another person for his mistake</h5><h5>Taking responsibility for your actions involves accepting the
consequences (good or bad) of your behavior, admitting and learning from your mistakes, and trying to
do better in the future. In the example, Jason blamed the office assistant for the mistake, but he is the
employee who is responsible for ordering the washers. By blaming another employee, Jason is failing to
accept responsibility for his actions. Jason was not helping Susan to resolve the problem, providing a
valid reason for the stock-out, or denying that a problem exists.
</h5></div><h5 id='q40'>40. A characteristic of positive people that is important to businesses is that people with a positive attitude
are usually</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. well trained.</option><option value="B">B. generous.</option><option value="C">C. inflexible.</option><option value="D">D. responsible.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is D: responsible.</h5><h5>Positive people accept responsibility for their own actions and don't try to blame others
when they make a mistake. They care about their job duties and are willing to learn new tasks or to take
on new duties. This makes them valuable employees. Positive people are flexible and adaptable. They
are also generous, but that is not important to the business. Whether they are well trained is related to
their background rather than their attitude.
</h5></div><h5 id='q41'>41. Maureen becomes angry and defensive whenever her supervisor asks Maureen to correct mistakes.
Maureen's attitude is not a good response to criticism because</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. it indicates that Maureen wants to call attention to herself.</option><option value="B">B. there is no reason to be angry about criticism.</option><option value="C">C. Maureen has no right to be angry on the job.</option><option value="D">D. it prevents Maureen from hearing the criticism clearly.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is D: it prevents Maureen from hearing the criticism clearly.</h5><h5>Defensiveness raises a barrier between you and
the speaker. Most of us feel angry or resentful when we are criticized, especially when the criticism is
unjust. However, we cannot afford to exhibit this kind of attitude on the job. If Maureen listened with an
open mind to the supervisor, she might learn not only how to correct her mistakes but how to avoid the
mistakes in the future. Maureen's attitude indicates immaturity rather than a desire to call attention to
herself.
</h5></div><h5 id='q42'>42. When the department manager was asked to replace the cash register with a scanner, s/he said that s/he
did not want to learn how to use the scanner. This is an example of being __________ to change.</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. unable</option><option value="B">B. receptive</option><option value="C">C. willing</option><option value="D">D. resistant</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is D: resistant</h5><h5>Being resistant to change means to oppose or withstand change. The manager was resisting a
technical change. Being receptive to change means to accept change. Being unable to change means
not having the ability to change. Being willing to change means to accept change.
</h5></div><h5 id='q43'>43. Which of the following is an issue that often causes controversy between employers and employees:</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. Job enlargement</option><option value="B">B. Wellness programs</option><option value="C">C. Social status</option><option value="D">D. Workplace privacy</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is D: Workplace privacy</h5><h5>An employee's right to privacy in the workplace is becoming more controversial
primarily as a result of new technology. Today, many employers use video cameras to monitor
employees on the job. Businesses also are able to track employees' use of computers and access their
e-mail. Businesses often feel that they have the right to take these measures because employees are
using company equipment on the company's time. On the other hand, employees often feel that
businesses do not have the right to invade their privacy by reading e-mail messages or recording phone
conversations. Job enlargement involves combining job tasks so that a worker has more responsibility for
the completion of a job. Wellness programs and social status are not issues that cause controversy
between employers and employees.
</h5></div><h5 id='q44'>44. An American manufacturer launches a product line that offends many customers in Middle Eastern
countries where the product line is considered inappropriate. This is an example of</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. nationalization.</option><option value="B">B. cultural imperialism.</option><option value="C">C. product adaptation.</option><option value="D">D. globalization.

</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is B: cultural imperialism.</h5><h5>Businesses in some countries, especially more developed ones, may have an
attitude that their approach, tastes, or preferences are "better" than those of other countries, particularly
less developed ones. Or, they may believe their cultural beliefs and attitudes are the only ones and
neglect other countries' cultures altogether. This is cultural imperialism. It is not an effective business
practice and does not lead to success in the long run. Globalization refers to keeping a product and
advertising message the same around the world, while nationalization refers to something whose
ownership is taken over by the government. Product adaptation is changing a product in some way to
make it more appropriate for another country's preferences.
</h5></div><h5 id='q45'>45. Eye contact is an example of what type of communication?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Nonverbal</option><option value="B">B. Informal</option><option value="C">C. Verbal</option><option value="D">D. Formal</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: Nonverbal</h5><h5>Nonverbal communication is all of the things you express with body movements and facial
expressions. Making and maintaining eye contact communicates interest in another person and what
s/he is saying. Formal communication, such as business letters and reports, is expressed in more formal
language than informal communication, which may take the form of memos or even rumors passed
through the grapevine. Verbal communication is transmitted orally.
</h5></div><h5 id='q46'>46. Passive behavior is often referred to as __________ behavior.</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. confrontational</option><option value="B">B. defiant</option><option value="C">C. creative</option><option value="D">D. avoidance</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is D: avoidance</h5><h5>Passive behavior is often called avoidance behavior because the main goal is to avoid
conflict at almost any cost. It is the opposite of confrontational behavior which is frequently defiant or
hostile. Passive behavior would not be referred to as creative.
</h5></div><h5 id='q47'>47. Which of the following are characteristics of adaptable people:</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. Creativity and resistance</option><option value="B">B. Objectivity and attentiveness</option><option value="C">C. Empathy and accuracy</option><option value="D">D. Fairness and fear</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is B: Objectivity and attentiveness</h5><h5>Adaptable people consistently exhibit certain attitudes or behavior,
regardless of the circumstances. Some characteristics of adaptable people include objectivity;
attentiveness; empathy; confidence; a respectful, positive, and self-corrective attitude; and constructive
(positive) risk taking. Resistance and fear are not attributes of adaptable people. Adaptable people do not
always do things accurately. Increased creativity is considered a positive outcome of adaptable behavior,
rather than a characteristic of adaptability.
</h5></div><h5 id='q48'>48. To influence others to work toward a shared vision, a leader should possess a high level of credibility and
should be able to provide supporting</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. assumptions.</option><option value="B">B. practices.</option><option value="C">C. skills.</option><option value="D">D. facts.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is D: facts.</h5><h5>Vision is the future that you desire to create. To fulfill a vision, the leader may need to get others to
embrace the vision and help him/her carry it out. Enlisting others' support might include using rational
persuasion, which is the method of appealing to others' intellects and minds by providing supporting facts
or evidence. By providing facts and evidence, the leader is giving reasons to support the vision. Practices
are procedures or activities that are followed. Skills are abilities. Assumptions are thoughts or information
that are taken for granted as being true, but may not be true.
</h5></div><h5 id='q49'>49. Pat tells Tim, "You can always talk to me. I'm here to help." Which of the following coaching
characteristics is Pat exhibiting:</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. Approachability</option><option value="B">B. Persistence</option><option value="C">C. Humility</option><option value="D">D. Dependability</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is A: Approachability</h5><h5>A coach is a person who enables other people to reach their true potential by helping
them to overcome the barriers that are keeping them from doing something they want to achieve.
Approachability is the attitude or demeanor that lets another person know that you are open and
available to talk to him/her. Persistence is continuing to work at a task or idea until the desired outcome is
achieved. Humility is the lack of pride. Dependability is doing what you say you will do.
</h5></div><h5 id='q50'>50. When there are frequent personality conflicts in a work group, the result is usually that it</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. interferes with the group's output.</option><option value="B">B. adds to the group's effectiveness.</option><option value="C">C. brings the work effort to a standstill.</option><option value="D">D. makes the group more compatible.</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is A: interferes with the group's output.</h5><h5>When there are frequent personality conflicts in a work group, the
result is usually that it interferes with the group's output, overall effectiveness, and performance. Conflicts
may not bring the work effort to a standstill, but they will slow it considerably. People who have frequent
personality conflicts are generally not compatible.
</h5></div><h5 id='q51'>51. To delay payment when buying business supplies from a web site, a purchaser is most likely to pay for
the goods with a(n) __________ card.</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. ATM</option><option value="B">B. debit</option><option value="C">C. credit</option><option value="D">D. store-value</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is C: credit</h5><h5>Credit is the arrangement in which businesses and individuals can purchase now and pay later.
One option businesses have to obtain credit is to secure credit cards from lending institutions.
Businesses can obtain the goods and services they need right away, such as airline tickets and supplies,
and then pay for the items when they receive their statement from their lending institutions. Businesses
often purchase the things they need to operate effectively online. In fact, many web-based businesses
will only accept credit cards as a form of payment. Debit cards, ATM cards, and store-value (gift) cards
do not delay payment.
</h5></div><h5 id='q52'>52. Chris is at the grocery store deciding between two very similar candy bars. One is $1.50, and the other is
$3.00. He decides to buy the $1.50 candy bar because it is cheaper. Chris is using money as a
____________ to make his decision.</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. store of value</option><option value="B">B. medium of exchange</option><option value="C">C. unit of measure</option><option value="D">D. commodity</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is C: unit of measure</h5><h5>Money can serve as a unit of measure to determine or compare the relative worth of
different products. Chris compares the monetary value of the two candy bars and selects the less
expensive one. While money does serve as the medium of exchange in this example, the fact that Chris
is using money instead of some other medium of exchange does not directly impact his decision. Money
would serve as the medium of exchange even if he purchases the more expensive candy bar. Store of
value means that money can be held over time and still have purchasing power at a later date. The
money that Chris is using is not a commodity because it does not have another use.
</h5></div><h5 id='q53'>53. For an investment to yield positive results at the end of the investment period, the earnings should</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. grow by at least ten percent.</option><option value="B">B. exceed the rate of inflation.</option><option value="C">C. be accrued on a debt security.</option><option value="D">D. be documented appropriately.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is B: exceed the rate of inflation.</h5><h5>When making investments, it is important to consider the time value of
money, which is the difference between the money's current purchasing power in relation to its
purchasing power at a future date. Earnings from investments can come in different forms, such as
accumulated interest from debt securities or dividends from equity securities. At the end of the
investment period, a successful investment will yield more money than the investor started with.
However, it is important to consider the rate of inflation—which is an increase in prices of goods and
services. If inflation increases more rapidly than the investment earns (e.g., 10%) during the investment
period, then the value of money earned will not yield the desired results. Documents and forms do not
affect the time value of money.
</h5></div><h5 id='q54'>54. The chief advantage of offering retail credit is to</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. increase business hours.</option><option value="B">B. decrease record keeping.
</option><option value="C">C. lower operating costs.</option><option value="D">D. increase sales volume.
</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is D: increase sales volume.
</h5><h5>Explanation not available</h5></div><h5 id='q55'>55. Molly and Tim have just had their first baby, Tommy. On top of their other financial considerations, such
as saving for their retirement, they will now have to start saving and investing for Tommy's</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. health insurance.</option><option value="B">B. retirement.</option><option value="C">C. life insurance.</option><option value="D">D. college education.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is D: college education.</h5><h5>Most new parents begin saving for their children's college education after they are
born, but some begin earlier. Tommy will likely have to pay for his own retirement and life insurance. As
soon as he is born, he will likely be put on their health insurance until he can afford his own.
</h5></div><h5 id='q56'>56. On his way home from work, Jason stops at the gas station to buy a magazine and a pack of gum. The
magazine and gum are examples of _________ expenses.</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. non-essential</option><option value="B">B. essential</option><option value="C">C. fixed</option><option value="D">D. variable

</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is A: non-essential</h5><h5>The gum and the magazine are extras. An example of an essential expense would be
paying the rent or car loans. Rent and car loans are also examples of fixed expenses. Variable expenses
are also essential expenses, but they vary from month to month. Some examples are heating and electric
bills, and gasoline.
</h5></div><h5 id='q57'>57. Calculate Jason's gross earnings for the pay period if his net pay is $796.84, his total tax obligation is
$157.27, his medical insurance is $45.00, and his union dues are $15.00.</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. $894.11</option><option value="B">B. $579.57</option><option value="C">C. $984.11</option><option value="D">D. $1,014.11</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is D: $1,014.11</h5><h5>Gross earnings are an employee's wages before taxes and other deductions, such as medical
insurance and union dues, are withheld from his/her paycheck. Net pay is the amount of money the
employee receives in his/her paycheck after deductions are subtracted. Employers provide an itemized
list of earnings and deductions on the employee's pay stub. To calculate Jason's gross earnings for the
pay period, add his net pay, total tax obligation, medical insurance, and union dues together ($796.84 +
$157.27 + $45.00 + $15.00 = $1,014.11).
</h5></div><h5 id='q58'>58. Melissa writes checks to pay for her rent, utilities, and groceries, and she keeps a record of all these
transactions in her check register. Keeping an accurate check register helps Melissa</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. track the amount of money she has spent.</option><option value="B">B. determine when she needs to add funds to her savings account.</option><option value="C">C. understand the checking account's restrictions and fees.</option><option value="D">D. decide when to order new checks.</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is A: track the amount of money she has spent.</h5><h5>A check is a negotiable instrument or bank draft made
payable to a specific party for a specific amount of money. A check serves as a written promise to the
check bearer that money is available in the issuer's bank account. Checks are a common form of
financial exchange. Both individuals and businesses use checks to pay for goods and services such as
rent, utilities, food, and supplies. When writing a check, an individual or business keeps a check register
that records information about the transaction. This information includes the date the check is written, to
whom the check is made payable, the amount of the check, and the check number. The register is a
central location to record and track all of the checks written and the amount of money spent. Check
registers do not help the check issuers determine when to add funds to a savings account, understand
the checking account's restrictions and fees, or decide when to order new checks.
</h5></div><h5 id='q59'>59. Jeff is a college student who just opened his first credit card. Which of the following should he NOT do:</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Buy more with his card than he can afford</option><option value="B">B. Pay his bill on time</option><option value="C">C. Think of his card as a loan</option><option value="D">D. Track his spending habits</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is A: Buy more with his card than he can afford</h5><h5>If Jeff does this, he will be headed towards a mounting credit
card debt. He should pay his bill on time to build good credit. Thinking of his card as a loan and tracking
his spending habits will keep him from overspending.
</h5></div><h5 id='q60'>60. Eric wants to buy a new house, and to do so he needs good credit. He has made all his rent, car, and
credit card payments on time, so he should have a good credit score. Before he goes to purchase the
house, he checks his credit report and finds that he has a low credit score because one of the agencies
mishandled his report. This example shows the importance of</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. validating credit history.</option><option value="B">B. buying a house.</option><option value="C">C. paying rent on time.</option><option value="D">D. good credit.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is A: validating credit history.</h5><h5>If Eric had not checked his credit score, he would not have known that the credit
bureaus mishandled his report. This example shows one of the steps for buying a house, but it is not an
example of the importance of buying a house. Paying rent on time is one way to develop good credit;
neither are truly illustrated in this example.
</h5></div><h5 id='q61'>61. Immediately contacting the credit-card company if credit cards are lost is one way to protect against</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. identity theft.</option><option value="B">B. excessive penalties.</option><option value="C">C. financial risk.</option><option value="D">D. high interest rates.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is A: identity theft.</h5><h5>Identity theft occurs when someone illegally obtains another person's information and uses
that information to assume the other person's identity. One way to protect against identity theft is to
immediately contact the credit-card company if credit cards are lost. If the cards fall into the hands of an
unauthorized person, that person can attempt to use the cards as if s/he was the owner of the card. This
is a type of identity theft. If someone uses another person's credit card illegally, the penalty is not
excessive and, in many situations, there is no penalty if the company is notified before any illegal use
occurs. Therefore, there is virtually no financial risk. Immediately contacting the credit-card company
does not protect against high interest rates.
</h5></div><h5 id='q62'>62. In investing, legal owning- or lending-agreements between individuals, businesses, or governments are
known as</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. premiums.</option><option value="B">B. securities.</option><option value="C">C. collateral.</option><option value="D">D. guarantees.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is B: securities.</h5><h5>In investing, legal owning- or lending-agreements between individuals, businesses, or
governments are known as securities. Securities can be separated into "owning" and "lending"
categories. Collateral is anything of value belonging to the borrower that is pledged to the lender to
guarantee that the loan will be repaid. Premiums are the fees paid by policyholders to insurance
companies to maintain insurance policies. Guarantees are sometimes provided by sellers to buyers in a
purchase situation.
</h5></div><h5 id='q63'>63. When a business purchases an insurance policy, it is agreeing to the terms of a</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. contract.</option><option value="B">B. charter.</option><option value="C">C. premium.</option><option value="D">D. policyholder.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: contract.</h5><h5>Insurance is a contractual agreement in which one company (insurer) will pay for specified
losses incurred by the other company (insured) in return for installment payments (premiums). Insurance
is a legal contract which may be terminated if the business fails to pay the agreed-upon payments or to
live up to the other terms of the contract. For example, a business may be required to maintain the facility
in good condition so it is safe. When a business purchases an insurance policy, it is not agreeing to the
terms of a charter. A premium is the installment payment. The business is the policyholder.
</h5></div><h5 id='q64'>64. Two employees used a business's computerized accounting system to change some records. They were
able to steal $50,000 from the business because the accounting system lacked which of the following:</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Protection from theft and fraud</option><option value="B">B. An affordable price</option><option value="C">C. A manual system as backup</option><option value="D">D. Printed financial statements</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is A: Protection from theft and fraud</h5><h5>The accounting system should be set up in a way that makes it difficult
for employees to gain access to the system and make changes to the information. The cost of operating
the system and the capability to generate printed financial statements are not related to the issue of theft.
A business would not be likely to maintain both a computerized and a manual accounting system.
</h5></div><h5 id='q65'>65. A business should strive to keep its cash conversion cycle as short as possible so it</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. can increase its profit margin.</option><option value="B">B. can earn dividends.</option><option value="C">C. has cash available to use.</option><option value="D">D. has fewer liquid assets.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is C: has cash available to use.</h5><h5>The cash conversion cycle is the ratio that reflects the number of days
between a company paying for raw materials and receiving cash from selling the products made from
those raw materials. The longer this period of time, the longer the company's money is tied up and
unavailable for other uses. Therefore, a financial manager strives to keep the cash conversion cycle as
short as possible, so that the business has more free cash to work with. A dividend is the amount of
money that a corporation pays to a stockholder as earnings on an investment. The profit margin is a
product pricing consideration. The profit margin is the amount of money that a business earns on sales
after expenses and is expressed as a ratio. Liquid assets are things of value that the business owns,
which can be quickly converted to cash.
</h5></div><h5 id='q66'>66. One reason why human resources management is important to the success of a business is because this
process is responsible for</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. creating jobs for the company.</option><option value="B">B. eliminating turnover.</option><option value="C">C. staffing the business.</option><option value="D">D. reducing compensation.</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is C: staffing the business.</h5><h5>Business
policies also are developed to keep operations running smoothly, to reduce misunderstandings, and to
guide employees' actions.
</h5></div><h5 id='q67'>67. Identify the marketing function illustrated in the following situation: Martha wants a winter coat and sees a
style she likes in a magazine advertisement.</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Promotion</option><option value="B">B. Selling</option><option value="C">C. Pricing</option><option value="D">D. Purchasing

</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is A: Promotion</h5><h5>The example illustrates an advertising activity that is part of the promotion function.
Purchasing is a business activity necessary to obtain goods and services for use in the operation of a
business. Selling is responding to customer needs and wants through planned, personalized
communication that influences purchase decisions and enhances future business opportunities.
Product/Service management is the marketing function that involves obtaining, developing, maintaining,
and improving a product or service mix in response to market opportunities.
</h5></div><h5 id='q68'>68. Which of the following is the most efficient tool for gathering external information that businesses need:</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Internet</option><option value="B">B. Library</option><option value="C">C. Software</option><option value="D">D. Textbooks</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is A: Internet</h5><h5>The Internet is a worldwide network of computers that enables users to access information and
communicate with others. Many businesses use the Internet to obtain needed external information
efficiently. For example, businesses can access the web sites of governmental agencies as well as
competitors to find information about specific issues. This is a fast and efficient way to obtain information
from a variety of sources without needing to visit the library and look through printed materials such as
textbooks. Software instructs computers to perform specific operations. Not all software is used to obtain
information.
</h5></div><h5 id='q69'>69. Using a computer-generated slideshow to highlight product information would be most appropriate in
which of the following business situations:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Employee performance review</option><option value="B">B. Project-team status meeting</option><option value="C">C. Formal sales presentation</option><option value="D">D. Union contract negotiations</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: Formal sales presentation</h5><h5>Presentation software is often used to provide visual support for oral
presentations. Presentation software is often used during sales presentations to provide customers or
prospective customers with visual information about the product's attributes and benefits. Graphic
depictions of products are especially useful for items that cannot be easily transported to other locations
because the audience can see an image of the product. Status meetings, employee performance
reviews, and union contract negotiations are not the most appropriate business situations in which to use
a computer-generated slideshow to highlight product information. The purpose of a status meeting is to
update the team about various aspects of a project. An employee performance review is a tool to provide
workers with feedback about their work efforts. Union contract negotiations occur when management and
labor representatives meet to reach agreement about the workers' pay, benefits, working conditions, etc.
</h5></div><h5 id='q70'>70. Which of the following U.S. laws relates to information management:</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. The Sarbanes-Oxley Act</option><option value="B">B. The Sherman Anti-Trust Act</option><option value="C">C. The Landrum-Griffin Act</option><option value="D">D. The Taft-Hartley Act</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is A: The Sarbanes-Oxley Act</h5><h5>The Sarbanes-Oxley Act of 2002 is a major federal law regarding information
management and accounting records. Businesses must take proper steps to comply with this legislation.
The Sherman Anti-Trust Act relates to monopolies. The Landrum-Griffin Act and the Taft-Hartley Act both
relate to labor issues.
</h5></div><h5 id='q71'>71. An automobile manufacturer is considering adding a sport utility vehicle to its product line. What
technology would allow the company to experiment with different styles, features, and sizes of the new
product without investing large amounts of money or time?</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Computer-aided design</option><option value="B">B. Computer-assisted manufacturing</option><option value="C">C. Data processing</option><option value="D">D. Artificial intelligence</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is A: Computer-aided design</h5><h5>This technology allows companies to experiment with different design
combinations for new products without investing time and money in building prototypes or going into
production. Computer-assisted manufacturing is used in actual production. Data processing gathers and
analyzes information but does not design product features. Artificial intelligence is software that allows
computers to learn and make decisions.
</h5></div><h5 id='q72'>72. What do businesses often develop to be able to store and analyze data for the purpose of making
business decisions?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Operating procedures</option><option value="B">B. Information systems</option><option value="C">C. Survey methods</option><option value="D">D. Management policies</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is B: Information systems</h5><h5>An information system is a method of gathering, storing, and analyzing data for the
purpose of making business decisions. Businesses acquire vast amounts of information that must be
stored and analyzed to make it useful. An effective information system enables a business to quickly and
accurately process information and use that information to make decisions. Businesses do not develop
operating procedures, survey methods, or management policies to be able to store and analyze data for
the purpose of making business decisions.
</h5></div><h5 id='q73'>73. What is the importance of the computer hard drive in a computer system?</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. It transmits power to other computer devices.</option><option value="B">B. It facilitates the computer's audio transmissions.</option><option value="C">C. It allows the user to view the computer data.</option><option value="D">D. It permanently stores the computer program files and data.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is D: It permanently stores the computer program files and data.</h5><h5>The hard drive is the component of the
computer's central processing unit (CPU) that stores the computer's program files and inputted data. A
sound card is a device that transmits sound waves through the computer so the user can hear audio
elements. A computer monitor allows the user to view the computer data. The power supply transmits
power to other computer devices (e.g., printer) so they can operate.
</h5></div><h5 id='q74'>74. Which of the following is an Internet-access source that allows computer users to log onto the Internet
without a physical connection:</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Analog</option><option value="B">B. Broadband Cable</option><option value="C">C. Wireless Fidelity</option><option value="D">D. Portal</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is C: Wireless Fidelity</h5><h5>Wireless Fidelity (Wi-Fi) allows computer users to access the Internet through radio
frequencies, which don't require a physical connection to power grids. Wireless Internet allows users the
ability to access their e-mail and various web sites from their laptop computers or cellular telephones
from different locations. Analog or dial-up Internet access involves using telephone lines that are
connected to a modem. Broadband cable requires a cable modem to access the Internet. A portal is a
popular starting point for surfing the Web (e.g., Yahoo).
</h5></div><h5 id='q75'>75. If your supervisor asks you to find information on Coca-Cola's current market share for cola in the United
States, the best and most precise wording to use when trying to narrow down the Internet search on most
search engines would be</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Coca-Cola OR current market share OR cola AND United States.</option><option value="B">B. Coca-Cola OR current market share OR cola OR United States.</option><option value="C">C. Coca-Cola AND current market share AND cola AND United States.</option><option value="D">D. Coca-Cola AND/OR market share.</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is C: Coca-Cola AND current market share AND cola AND United States.</h5><h5>Search engines need to be given
directions using exact wording. Using "AND" links all of the required information together and gives a
more productive search. The more exact the wording, the more narrow the responses returned, and the
less time wasted on unrelated responses. Using "OR" as the logical operator will tell the search engine to
return information on individual topics instead of responses that include all four topics. The "AND/OR"
could return responses on either Coca-Cola or market share. It could also give you Coca-Cola market
share, but it might not; or it might be for a country other than the United States. The "Coca-Cola OR
current market share OR cola AND United States" could return responses for other companies, other
industries, or information on cola in the United States, but not the specific information needed.
</h5></div><h5 id='q76'>76. While preparing the company's annual report in a computer word-processing program, Natasha deleted
an entire paragraph by mistake. The best way for Natasha to correct the mistake is to</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. use the edit undo command.</option><option value="B">B. retype the paragraph.</option><option value="C">C. copy the text from another document.</option><option value="D">D. create a template.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is A: use the edit undo command.</h5><h5>The edit undo command allows the computer user to “undo” a previous
action, such as deleting text by mistake. Although it is possible to retype the paragraph or to copy the text
from another document that contains the text, these actions are not as quick and easy as using the edit
undo command. A template is a standard format that helps users develop documents.
</h5></div><h5 id='q77'>77. A hotel wants to purchase computer software that would store, manage, and retrieve customer
information in order to better serve customer needs and increase sales. What type of software should the
hotel buy?</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Computer-aided design</option><option value="B">B. Spreadsheet</option><option value="C">C. Word processing</option><option value="D">D. Database

</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is D: Database

</h5><h5>Explanation not available</h5></div><h5 id='q78'>78. The manager of a pet supply store is planning a sale. The manager set up a spreadsheet to calculate the
sale price for each item to reflect a 30% discount off the retail price. The retail price for an aquarium is
$228.00. What is the sale price for the aquarium?</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. $182.40</option><option value="B">B. $148.20</option><option value="C">C. $159.60</option><option value="D">D. $193.80</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is C: $159.60</h5><h5>Spreadsheets are computer software programs and are used to save, sort, and update
information. Formulas are programmed into the software that can automatically calculate numerical data
such as percentages. Businesses often use spreadsheets to record, manage, and analyze a variety of
financial, sales, and inventory information. In this example, the manager is using a spreadsheet program
to calculate the sale price ($228.00 x 30% or .30 = $68.40; $228.00 - $68.40 = $159.60).
</h5></div><h5 id='q79'>79. Which of the following is needed to post a web page:</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Legal permit</option><option value="B">B. Product to sell</option><option value="C">C. Interested audience</option><option value="D">D. Web server</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is D: Web server</h5><h5>After creating a web page, the developer needs to post the web page through a web server
or Internet service provider (IPS). The Web server or IPS may charge a fee to post and store the web
page, although some web servers will provide the service free of charge. Developers post web pages for
many reasons, which may include selling products to interested audiences. Legal permits are not
required to post a web page.
</h5></div><h5 id='q80'>80. Operations activities vary depending on a business's</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. tax return.</option><option value="B">B. name.
</option><option value="C">C. product.</option><option value="D">D. address.
</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is C: product.</h5><h5>Operations activities vary depending on a business's product. The product a business makes or
provides affects every aspect of operations. A business's name, tax return, or address should not affect
its operations activities.
</h5></div><h5 id='q81'>81. An employee notifying a government agency that the business is violating health and safety regulations is
an example of</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. reporting noncompliance.</option><option value="B">B. spreading gossip.</option><option value="C">C. unethical behavior.</option><option value="D">D. verbal communication.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is A: reporting noncompliance.</h5><h5>Certain government agencies have developed health and safety regulations
that businesses are expected to follow in order to provide employees with a safe work environment. If
businesses do not comply with these regulations, they should be reported for noncompliance so the
necessary action can be taken to solve the problem and make the workplace safe for employees. The
goal is to correct dangerous situations and keep the workplace safe. An employee notifying a
government agency is not an example of spreading gossip, unethical behavior, or verbal communication.
In fact, the employee is exhibiting ethical behavior. Also, the employee may have notified the agency in
writing which is nonverbal communication.
</h5></div><h5 id='q82'>82. Jamie has been feeling exhausted and has had several minor accidents at work because of it. His
supervisor is calling him in for a conference. Which of the following safety risks will they discuss:</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. Horseplay</option><option value="B">B. Fatigue</option><option value="C">C. Hazards</option><option value="D">D. Housekeeping</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is B: Fatigue</h5><h5>Fatigue is a state of mental and/or physical tiredness. Being fatigued can cause workers to have
difficulty paying attention on the job, to make mistakes, or to have accidents. Horseplay is behavior such
as running, jumping, wrestling, or showing off. Poor housekeeping can create such hazards as tools or
equipment on the floor for people to trip over or spilled liquids that can cause people to fall.
</h5></div><h5 id='q83'>83. When an accident occurs at a place of business, employees should first try to</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. call an ambulance.</option><option value="B">B. move the injured person.</option><option value="C">C. take the victim's pulse.</option><option value="D">D. find out how serious it is.</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is D: find out how serious it is.</h5><h5>In order to know what needs to be done or how much help is needed,
employees need to find out whether the accident victim's injuries are minor or life threatening. Taking the
victim's pulse should be done by medical personnel. Depending on the seriousness of the injury, it may
be necessary to call a doctor or an ambulance, but an injured person should not be moved.
</h5></div><h5 id='q84'>84. A cashier at Puritan Supermarket was approached by robbers who used force, violence, and fear to gain
access to the cash inside the cash register. What type of common business security problem did the
supermarket experience?</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Shoplifting</option><option value="B">B. Robbery</option><option value="C">C. Burglary</option><option value="D">D. Embezzlement</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is B: Robbery</h5><h5>To steal money from Puritan Supermarket, the robbers used force, violence, and fear to
persuade the cashier to give them the money in the cash register. Robbery is theft that involves the use
of force, violence, or fear. Shoplifting is the theft of goods by customers. Burglary is any illegal entry into
a building to commit a theft. Embezzlement is theft of valuables that have been entrusted to one's care.
</h5></div><h5 id='q85'>85. Why have some major retail businesses decentralized their purchasing operations?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. They maintain a wider variety of suppliers.</option><option value="B">B. Their buyers prefer to be independent.</option><option value="C">C. Their stores are geographically distant.</option><option value="D">D. They obtain lower prices for smaller orders.</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is C: Their stores are geographically distant.</h5><h5>Some retail chains have grown so large that central buying can
no longer effectively purchase for geographically distant stores. In response to this development, many
large retail firms have decentralized their purchasing operations by dividing the country into districts and
delegating part of central buying's responsibility to district managers who are more familiar with local
stores. Businesses usually obtain lower prices for large orders. Businesses do not decentralize their
purchasing operations because buyers prefer to be independent. Both centralized and decentralized
purchasing operations are able to maintain a wide variety of suppliers.
</h5></div><h5 id='q86'>86. What do businesses need to maintain in order to produce goods and services for customers?</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Schedule of accounts</option><option value="B">B. List of vendors</option><option value="C">C. Inventory of supplies</option><option value="D">D. Copies of invoices</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is C: Inventory of supplies</h5><h5>All businesses need to maintain an inventory of supplies in order to produce goods
and services for customers. Small businesses may only need office supplies while retailers also need
supplies to wrap packages. Large manufacturing businesses need vast inventories of resources to
produce products. Without an inventory of supplies, businesses will not be able to do even simple tasks.
The result might be a loss of customers and a loss of income. Some businesses may need only one
vendor rather than a list of vendors. Businesses do not need to maintain a schedule of accounts or
copies of invoices to produce goods and services for customers.
</h5></div><h5 id='q87'>87. Production processes that rely heavily on expensive equipment and materials are __________
processes.</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. capital-intensive</option><option value="B">B. labor-intensive</option><option value="C">C. standardized</option><option value="D">D. intermittent</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is A: capital-intensive</h5><h5>Capital-intensive production processes rely heavily on the use of expensive equipment
and materials rather than on the activities of workers. Facilities that generate electrical power are
examples of capital-intensive production processes because they use expensive equipment but few
workers. Intermittent production processes stop and restart at a later time. Labor-intensive production
processes cannot take place without skilled workers. Standardized production processes require simple,
repetitive tasks.
</h5></div><h5 id='q88'>88. If you are in doubt about selecting an item of clothing for work, it is usually best to choose the one that is</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. a current fad.</option><option value="B">B. highly advertised.</option><option value="C">C. conservative.</option><option value="D">D. most eye-catching.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is C: conservative.</h5><h5>When in doubt, be conservative. This is especially true in selecting clothes for work. Your
work clothes should present a positive image of you and the business for which you work. They should
not distract customers from the products you sell or coworkers from doing their jobs. Choosing clothing
that is highly advertised, a current fad, or eye-catching would not be as wise as choosing something
conservative.
</h5></div><h5 id='q89'>89. Employees who have innovation skills are able to</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. behave aggressively.</option><option value="B">B. think in new ways.
</option><option value="C">C. react to problems.</option><option value="D">D. socialize effectively.

</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is B: think in new ways.
</h5><h5>Explanation not available</h5></div><h5 id='q90'>90. Setting boundaries is also known as</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. identifying alternatives.</option><option value="B">B. establishing criteria.

9
</option><option value="C">C. pinpointing objectives.</option><option value="D">D. making decisions.
</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is B: establishing criteria.

9
</h5><h5>Explanation not available</h5></div><h5 id='q91'>91. Which of the following would be most likely to help you to determine whether you can be successful in a
particular line of work:</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Talking to someone who is currently employed in this field</option><option value="B">B. Asking your counselor about opportunities in the field</option><option value="C">C. Contacting businesses that are part of the industry</option><option value="D">D. Taking courses required of those who do this kind of work</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is D: Taking courses required of those who do this kind of work</h5><h5>Whether you can complete the courses
successfully will tell you whether you can succeed in a particular field. For example, doing well in basic
and advanced accounting courses would indicate you have a good chance of being successful as an
accountant. Talking to someone in the field, asking your counselor for information about job
opportunities, and contacting businesses in the field are good ways of gathering information; but they are
not predictors of success.
</h5></div><h5 id='q92'>92. When male employees earn more money than female employees for performing the same type of work, a
business is violating the employees' rights to</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. occupational safety.</option><option value="B">B. training and supervision.</option><option value="C">C. union representation.</option><option value="D">D. equal pay.</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is D: equal pay.</h5><h5>Many governments have established laws to help protect employees' rights in the workplace.
One right employees have is to earn fair and equal pay for performing the same work as others. In many
countries, it is illegal to pay an employee on the basis of race, age, or gender, because this is a form of
discrimination, and it violates employees' rights. Employees do not always join labor unions, which is
dependent on the industry and the nature of the work. Employees have the right to expect and receive
proper training and supervision under safe working conditions; however, the example does not indicate
that these rights have been violated.
</h5></div><h5 id='q93'>93. If individuals enjoy operating machinery, driving vehicles, or using tools, they might consider a career that
involves working with</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. people.</option><option value="B">B. animals.</option><option value="C">C. things.</option><option value="D">D. information.</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is C: things.</h5><h5>Individuals should consider what they like to do, their favorite activities, when identifying possible
occupations. For example, some individuals enjoy operating machinery, driving vehicles, or using tools.
As a result, they might consider a career that involves working with things which are tangible items.
Examples include a landscaper who operates equipment and drives a truck, and a carpenter who uses
tools to build furniture. Careers that involve working with people and animals require a lot of personal
interaction and patience. Careers that involve working with information involve keeping track of data such
as facts and statistics.
</h5></div><h5 id='q94'>94. Home-based businesses are attractive to many people because the businesses generally</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. require less technical training.</option><option value="B">B. provide owners a steady income.</option><option value="C">C. yield higher profit margins.</option><option value="D">D. have lower start-up costs.</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is D: have lower start-up costs.</h5><h5>The initial cost of business start-ups depends on a number of variables. One
factor that influences start-up expense is work space. Because a home-based business is run from the
business owner's residential dwelling, it lowers the cost by not having to rent space or build a facility.
Entrepreneurial ventures do not guarantee steady income or higher profit margins. The degree of
professional training depends on the type of business the entrepreneur is running. Therefore, it cannot be
assumed that most home-based business owners require less technical training.
</h5></div><h5 id='q95'>95. Students searching for a job should check the listings posted in the school's</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. guidance office.</option><option value="B">B. computer lab.</option><option value="C">C. auditorium.</option><option value="D">D. athletic department.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is A: guidance office.</h5><h5>Most schools have a guidance office that local businesses often contact when they are
looking for workers. Students searching for jobs should check the listings that are posted in the guidance
office. The guidance office also will have information about those job openings that will be helpful to
students wishing to apply. The athletic department, computer lab, and auditorium usually do not maintain
lists of available jobs although staff in those offices may know of jobs specific to their fields.
</h5></div><h5 id='q96'>96. Which of the following would help a job applicant to fill out job application forms easily:</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Knowing someone at the business</option><option value="B">B. Having computer experience</option><option value="C">C. Keeping a file of job leads</option><option value="D">D. Having a personal data sheet</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is D: Having a personal data sheet</h5><h5>A personal data sheet is a list of information such as the applicant's Social
Security number; the names, addresses, and telephone numbers of references; dates of previous
employment; grade-point average; and any other data that might be asked for on a job application. Job
applicants who prepare and use a personal data sheet can fill out job applications quickly, easily, and
accurately because they have all the data they need on the sheet. Job applications are generally filled
out by hand not by computer. Keeping a file of job leads helps the applicant to organize his/her search for
a job. Knowing someone at the business would not necessarily help a job applicant to complete a job
application.
</h5></div><h5 id='q97'>97. A job interview follow-up letter can be a valuable tool for applicants who are nervous during a job
interview because the letter can</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. persuade the interviewer to hire them for the job.</option><option value="B">B. include anything that the applicant forgot to mention.</option><option value="C">C. demonstrate their skill in oral communication.</option><option value="D">D. overcome the impression they made during the interview.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is B: include anything that the applicant forgot to mention.</h5><h5>Many job applicants find the interview process
nerve-wracking. After the interview, an applicant may think of some important fact about himself/herself
that they forgot to tell the interviewer. It is appropriate for the applicant to include this information in a
follow-up letter, which could help the him/her to get the job. A letter is not likely to overcome the
impression that a nervous applicant made during an interview, but it may modify it somewhat. Letters
demonstrate written communication skills, not oral. Interviewers must remain objective in order to hire the
most qualified candidate for the job, which makes it unlikely that a hiring decision would be based on a
letter.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1068

BUSINESS ADMINISTRATION CORE EXAM

1

1. Which of the following is a characteristic of a business-format franchise:</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. by telephone.</option><option value="B">B. in person.</option><option value="C">C. online.</option><option value="D">D. indirectly.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: indirectly.</h5><h5>procedures, survey methods, or management policies to be able to store and analyze data for
the purpose of making business decisions.
</h5></div><h5 id='q99'>99. Which of the following is an example of a person obtaining unpaid work experience:</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Kelly volunteers at a local radio station.</option><option value="B">B. Jim hires Kevin to cut his lawn every week.</option><option value="C">C. Sarah researches information about different careers.</option><option value="D">D. Ben performs contract work for his friend's new company.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is A: Kelly volunteers at a local radio station.</h5><h5>One way to obtain work experience is by volunteering. Volunteer
work involves donating time without pay to complete tasks or projects. By volunteering at the radio
station, Kelly can gain insight about a potential career interest, and she gains experience that might help
her obtain a paying position in radio in the future. Hiring someone to cut the lawn or perform contract
work involves payment. Researching careers might provide Sarah with insight, but this activity won't
provide her with on-the-job experience.
</h5></div><h5 id='q100'>100. Kate's coworker Jack is meeting with a very important German client tomorrow. Kate has been to
Germany several times, and tells Jack that German businesspeople tend to be very formal and serious in
business situations. After learning this information, Jack now knows that he should avoid</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. shaking hands.</option><option value="B">B. using titles.</option><option value="C">C. using humor.</option><option value="D">D. making eye contact.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is C: using humor.</h5><h5>Because Germans tend to be very formal and serious about their business, they do not find
it appropriate to use humor during business situations. It is appropriate to use titles, shake hands, and
make eye contact with Germans in business situations. These behaviors are respectful to Germans.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Principles_2_Split_Homework.js"></script></html>