<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Principles Exam 3</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. When filing a tort against a business, the plaintiff must establish that the defendant</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. damaged property intentionally.</option><option value="B">B. breached the duty of care.</option><option value="C">C. conspired with a competitor.</option><option value="D">D. violated the doctrine of sovereign immunity.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is B: breached the duty of care.</h5><h5>The duty of care is the basic principle that expects all individuals and
businesses to exhibit socially responsible behavior by using caution to prevent harm and by watching out
for one another. A tort is a private wrongdoing that potentially harms another person or entity. If a
business or one of its employees breaches the duty of care, the business may be held liable for the tort.
However, the plaintiff must have grounds or proof that establishes that the business or its employee
(defendant) has committed a wrongful act, thereby breaching the duty of care. Intentional damage and
conspiring with a competitor (collusion) are types of torts. The doctrine of sovereign immunity is the
universally accepted principle that each nation has the right to manage its own government and develop
its own laws.
</h5></div><h5 id='q2'>2. A debtor-creditor relationship exists when</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. interest is charged.</option><option value="B">B. a sale is paid in full.
</option><option value="C">C. a contract is invalidated.</option><option value="D">D. stocks are liquidated.
</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is A: interest is charged.</h5><h5>When an individual or business charges interest on money that another individual or
business borrows, a debtor-creditor relationship exists. An invalid contract and a sale that is paid in full at
the time of transaction do not establish a debtor-creditor relationship. In some situations, a debtor may
liquidate stocks to pay a creditor; however, this does not always occur.
</h5></div><h5 id='q3'>3. Which of the following is an example of a responsibility associated with administrative law:</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. A defendant receiving the right to legal counsel</option><option value="B">B. An appeals-court judge overturning a lower court's ruling</option><option value="C">C. A government agency approving the distribution of a new medication</option><option value="D">D. A nation's president signing a trade agreement</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is C: A government agency approving the distribution of a new medication</h5><h5>Administrative law is a branch of
law that addresses the rules and regulations that have been established by governmental agencies. The
legislative branch of the government (i.e., U.S. Congress and Canadian Parliament) establishes
governmental agencies, and gives them the authority to enact and enforce regulations for different types
of administrative functions, such as approving the distribution of a new medication within a certain
jurisdiction. The judicial branch of government has the authority over the appeals process in the court
system. Procedural law deals with the activities that ensure due process and protects certain rights, such
as an individual's right to legal counsel. In the U.S., the president's duties are part of the executive
branch of the government.
</h5></div><h5 id='q4'>4. What question is important to ask when determining if online sources are providing reliable information
for a research report?</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Do I need to provide a bibliography?</option><option value="B">B. Do I agree with the opinions expressed in the article?</option><option value="C">C. Can the author be quoted?</option><option value="D">D. What are the author's credentials?</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is D: What are the author's credentials?</h5><h5>When identifying sources that provide relevant, valid written material,
the researcher evaluates a variety of factors, including the credibility of the author. A credible author
would have expertise and knowledge of the topic at hand. For example, an economics professor's article
about aggregate demand would tend to be more trustworthy than if the article was written by a
construction worker. Research reports should look at a topic from different viewpoints to ensure that it is
objective and free of bias. Whether the author can be quoted or if a bibliography is required are not
questions that address the reliability of the online information.
</h5></div><h5 id='q5'>5. Jacob was nervous about making his valedictorian speech, but when he stood up to walk to the podium,
the audience cheered and gave him a standing ovation, which helped him relax and enjoy the moment.
What was the audience doing?</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Engaging in passive listening</option><option value="B">B. Mocking the speaker</option><option value="C">C. Exhibiting unprofessional behavior</option><option value="D">D. Encouraging the speaker</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is D: Encouraging the speaker</h5><h5>In many cultures, a standing ovation is the ultimate show of support for a
speaker. It indicates the audience's respect for the speaker, and its desire to hear what the speaker has
to say. Because cheering provides positive feedback, the audience was not mocking or insulting the
speaker. Some cultures might view the audience's behavior as unruly or disrespectful; however, this
situation involves a school event, rather than a business event, so the audience isn't exhibiting
unprofessional behavior. Because Jacob has not started speaking, the audience is not actively listening
to what he is saying.
</h5></div><h5 id='q6'>6. When Amber walked by Ryan's desk, she noticed that Ryan was raking his left hand through his hair,
that his face was red, and that he kept hitting the enter button on keyboard with his right hand, while
frowning at his computer screen. Based on his nonverbal cues, Amber would probably assume that Ryan
was</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. frustrated.</option><option value="B">B. patient.</option><option value="C">C. bored.</option><option value="D">D. enthusiastic.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is A: frustrated.</h5><h5>Nonverbal cues can tell others a lot about your emotions. In this situation, Ryan's nonverbal
behavior indicated that he was frustrated because he couldn't get his computer to do what he wanted it to
do. If Ryan was patient, he would not continuously hit his keyboard, turn red, or frown. If Ryan was bored,
he would be inattentive about his situation or surroundings. He might even yawn or do something other
than computer work for a while. Enthusiasm is associated with a positive attitude.
</h5></div><h5 id='q7'>7. Is it a legitimate response to a customer's inquiry for an employee to say that s/he doesn't know the
answer to a customer's question?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. No. It is the employee's responsibility to learn every aspect of the business and to be able to
answer every question.</option><option value="B">B. Yes, if the employee doesn't know the answer to the customer's question, then the customer will
find another employee to provide the information.</option><option value="C">C. No. Customers do not respect employees who cannot answer simple questions, so it is better to
provide them with an educated guess.</option><option value="D">D. Yes, if the employee advises the customer that s/he will get the information and will respond to
the customer as soon as possible.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is D: Yes, if the employee advises the customer that s/he will get the information and will respond to
the customer as soon as possible.</h5><h5>Explanation not available</h5></div><h5 id='q8'>8. It is appropriate to use slang during conversation, when you are</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. being introduced to a new coworker.</option><option value="B">B. meeting with a new customer.</option><option value="C">C. interviewing for a job.</option><option value="D">D. socializing with close friends.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is D: socializing with close friends.</h5><h5>Casual communication is generally used with family and friends and may
include the use of slang. Slang is informal language mutually understood within a group. For example,
you might refer to your friends as your “buds” (buddies) when speaking with your family. However, people
outside your family and circle of friends may not understand what “bud” means. They might associate the
word “bud” with a rose (bud) or leaf (bud). Formal communication is appropriate when meeting with a
new customer, when interviewing for a job, or when you are being introduced to a new coworker. Formal
communication involves using proper grammar and a respectful tone.
</h5></div><h5 id='q9'>9. Businesspeople are more likely to accept a new idea if the idea will</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. impact the economy.</option><option value="B">B. require additional resources.</option><option value="C">C. improve a situation.</option><option value="D">D. involve a lot of risk.
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is C: improve a situation.</h5><h5>To get others to accept your idea, you must indicate how the idea will improve a
situation or provide a benefit. Feasible business ideas might include improvements such as increasing
profits, efficiency, sales, market share, etc. Feasible ideas may or may not impact the economy, involve a
lot of risk, or require additional resources. Businesspeople are more likely to scrutinize and want
supporting evidence for ideas that require additional resources or involve high risk taking, which could
make acceptance more challenging.
</h5></div><h5 id='q10'>10. Brooke is attending a meeting to discuss an upcoming project that she will be working on. To take
effective notes during the meeting, Brooke must</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. answer questions.</option><option value="B">B. listen carefully.</option><option value="C">C. express opinions.</option><option value="D">D. develop a briefing.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is B: listen carefully.</h5><h5>Brooke must listen to the speaker so she can identify the key points that she wants to
write down. By noting the key points, Brooke will be able to refer the most important information when
she needs it later. Effective note-taking does not involve answering questions or expressing opinions.
Brooke might need her notes to develop a briefing, which is a summary of important information or
instructions.
</h5></div><h5 id='q11'>11. It is most appropriate to format a section of a document with a numbered list, when you are</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. including a testimonial in a promotional piece.</option><option value="B">B. identifying the sequential steps of a process.</option><option value="C">C. using charts to summarize information.</option><option value="D">D. providing a detailed example to clarify a concept.</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is B: identifying the sequential steps of a process.</h5><h5>When describing activities that need to be done in a specific
order, the writer might want to number the steps to set the process apart from the text and to clarify the
process. One testimonial or a single piece of information does not require a numerical designation to
reinforce the order of content. Charts are graphics that summarize numerical data. A narrative writing
format is usually most appropriate when providing an example to clarify a concept.
</h5></div><h5 id='q12'>12. While reading the first draft of her report, Rachel changes some of the words and shortens some of the
sentences to improve the clarity and conciseness of the document. What step in the writing process is
Rachel performing?</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Researching</option><option value="B">B. Editing</option><option value="C">C. Organizing</option><option value="D">D. Formatting</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is B: Editing</h5><h5>Editing is the process of assessing the flow and clarity of written materials. Effective editing often
involves reorganizing or shortening sentences, changing words, and correcting spelling and grammatical
errors to improve the readability of the document. Researching is the process of gathering information for
the report, which is done before the writing process begins. Organizing involves planning the order in
which to present the information in the document. Formatting involves establishing the “mechanical”
structure of the document, such using as block or indented paragraphs, page-number location, etc.
</h5></div><h5 id='q13'>13. An e-mail message that is sent to a coworker should contain</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. essential information.</option><option value="B">B. an urgent tone.</option><option value="C">C. a persuasive argument.</option><option value="D">D. encouraging news.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is A: essential information.</h5><h5>E-mail is a quick, efficient way to communicate with customers and coworkers. The
primary reason for writing the e-mail message is to inform others about various business activities;
therefore, it should be written in a friendly, professional manner that contains essential information.
Businesspeople tend to receive a lot of e-mail messages, so it is important to get to the point quickly. The
message should be concise, free of typographical errors, and grammatically correct. The e-mail message
may or may not be urgent, persuasive, or encouraging in nature—these factors depend on the purpose of
the message.
</h5></div><h5 id='q14'>14. Mitchell is writing an e-mail to a company asking for some information that he needs to complete a
research project. What is the most effective way to close the message?</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. I wish you the best of luck.</option><option value="B">B. I need this information ASAP.</option><option value="C">C. I appreciate your help with this issue.</option><option value="D">D. I apologize for the inconvenience.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is C: I appreciate your help with this issue.</h5><h5>An inquiry is a request for information. Letters of inquiry are
requests for information such as product specifications, prices, job openings, proposals, expertise or
consultation, etc. Letting the message recipient know that you appreciate his/her time and effort is a
cordial way to close the message. The message sender might state a time when s/he plans to follow-up
with the recipient. Closing the message by saying the information is needed ASAP is rude and
unprofessional. Wishing the message recipient luck and extending an apology are inappropriate closings
for the situation at hand.
</h5></div><h5 id='q15'>15. An effective executive summary should contain the</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. results of the marketing-research efforts.</option><option value="B">B. necessary background for making quick decisions.</option><option value="C">C. most important points from the report.</option><option value="D">D. list of report elements and appendices.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is C: most important points from the report.</h5><h5>The executive summary is usually placed at the beginning of a
long or complex report (e.g., business plan). The purpose of the executive summary is to provide the
reader with an overview of the entire document. The audience tends to read the executive summary first
to decide whether it is worthwhile to read any further. The document is usually one to three pages long,
so it should be concise and contain the most important points or facts of the overall report. The report's
introduction often includes necessary background information that the reader needs; however, the reader
should not make quick decisions by considering only this information. Businesspeople write many types
of reports; therefore, the report may or may not contain marketing-research results, depending on the
report's purpose. The list of report elements is called the table of contents, which often advises readers
where in the report they can find any appendices that the report includes.
</h5></div><h5 id='q16'>16. Techtron Electronics Store has just received a shipment of a new PlayStation game that has been on
order for several weeks. The best way for the store's manager to advise Techtron sales associates that
the game is available is by</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. placing sales circulars in display racks.</option><option value="B">B. distributing a memo to the store's buyers.</option><option value="C">C. sending an e-mail to the store's cashiers.</option><option value="D">D. holding a short sales-staff meeting.</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is D: holding a short sales-staff meeting.</h5><h5>Short meetings are a common way to communicate information
about new products, sales promotions, and inventory issues. Retail employees tend to work in shifts at
different times, so a short meeting is an ideal way to communicate store information to several
employees at one time. Retail cashiers do not usually have access to a “work” e-mail account. Sending a
memo to buyers and placing sales circulars in display racks are not effective ways to communicate up-todate product information to the store's front-line employees.
</h5></div><h5 id='q17'>17. Which of the following is an example of an employee using nonverbal communication effectively to
reinforce his/her service orientation:</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Tristan answered his office telephone and said, "Blanton Industries. How can I help you?"</option><option value="B">B. When Mrs. Jones complained that her steak was not cooked the way she wanted it, Leah rolled
her eyes.</option><option value="C">C. Molly nodded and maintained eye contact as Ms. West explained the problem with her computer.</option><option value="D">D. Paul crossed his arms and tapped his foot impatiently as Mr. Cook asked about a charge on his
bank statement.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is C: Molly nodded and maintained eye contact as Ms. West explained the problem with her computer.</h5><h5>Having
a service orientation involves expressing a positive, helpful attitude with the business's customers.
Employees' gestures and facial expressions convey their attitudes, which customers often believe is a
reflection of the business's attitudes. Because Molly nodded and maintained eye contact with Ms. West
while she was explaining a computer problem, Molly was indicating that she was listening and willing to
help her customer. Employees are not exhibiting a service orientation by behaving rudely, which may
include rolling their eyes, crossing their arms, and being impatient with customers. Tristan was
demonstrating a service orientation through his verbal rather than his nonverbal communication.
</h5></div><h5 id='q18'>18. Oliver is a Canadian businessperson who will be traveling to Scotland to close an important business
deal. Does Oliver need to alter his communication style to adapt to the Scottish culture?</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. Yes. Oliver should do some research on Scottish culture, so he doesn't do or say something
offensive.</option><option value="B">B. Yes. Scottish people tend to dislike Canadians for many reasons, so Oliver needs to make sure
he is behaving appropriately.</option><option value="C">C. No. Scottish people speak English, so Oliver does not need to do anything special to prepare for
the trip.</option><option value="D">D. No. Western cultures tend to have similar cultural attitudes and practices, so Oliver does not
need to research Scottish etiquette.

</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is A: Yes. Oliver should do some research on Scottish culture, so he doesn't do or say something
offensive.</h5><h5>Explanation not available</h5></div><h5 id='q19'>19. What types of behaviors and traits should employees exhibit to reinforce a company's image and to build
repeat business?</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Helpful, aggressive, and friendly</option><option value="B">B. Consistent, knowledgeable, and helpful</option><option value="C">C. Friendly, consistent, and passive</option><option value="D">D. Knowledgeable, consistent, and aggressive</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is B: Consistent, knowledgeable, and helpful</h5><h5>Employees are one of many touch points for the business.
Customers often base their impressions of a business-positive and negative-on the interactions they
have with the business's employees. Employees who are consistently friendly, helpful, and
knowledgeable each time they interact with customers are building favorable relationships. These
favorable relationships encourage customer loyalty and repeat sales. Employees who are too aggressive
or too passive are more likely to offend customers.
</h5></div><h5 id='q20'>20. A company places a confidentially statement at the bottom of its web site's home page that states:
"This company will not release your information unless you direct us to do so, or unless we are legally
obligated to provide certain information to authorized agencies."
What is the significance of the statement?</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. It expresses the company's vision for the future.</option><option value="B">B. It communicates the company's commitment to protect its customers' privacy.</option><option value="C">C. It describes the company's incentive and loyalty program.</option><option value="D">D. It outlines the company's policies regarding public information.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is B: It communicates the company's commitment to protect its customers' privacy.</h5><h5>An ethical company
implements strategies to protect its customers' privacy. Communicating how the company will protect its
customers' privacy helps to build the customers' trust. If customers feel that the company respects their
privacy, they are more likely to trust the company and become loyal customers. Loyal customers provide
the company with repeat sales and long-term relationships. A company's vision statement expresses its
desire for the future. The statement on the company's web site does not describe public information
policies or specific details about its incentive and loyalty program.
</h5></div><h5 id='q21'>21. An apparel company's target market is 18- to 34-year-old females. What form of technology can the
company use to communicate on an ongoing basis with its customers at their convenience?</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Infomercial</option><option value="B">B. Telemarketing</option><option value="C">C. Social media</option><option value="D">D. Instructional</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is C: Social media</h5><h5>Businesses have the ability to up set accounts with social networking web sites such as
Facebook, Twitter, and Myspace, which help them stay in contact with customers (fans) on an ongoing
basis. The social networking sites can provide insight about customers' lifestyles and preferences, and
then businesses can use the information to customize customer appeals and promotions. Telemarketing
practices and television infomercials are not communication vehicles that businesses use for ongoing
two-way communication at the customers' convenience. Instructional software applications are used to
support students' learning and academic development.
</h5></div><h5 id='q22'>22. When Angela spent her birthday money on a designer handbag, the opportunity cost was</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. reading a book.</option><option value="B">B. hanging out with friends.</option><option value="C">C. buying concert tickets.</option><option value="D">D. working out at the gym.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is C: buying concert tickets.</h5><h5>Opportunity cost is the benefit that is lost when you decide to use scarce
resources for one purpose rather than another. In Angela's situation, her scarce resource was money.
Because she decided to purchase a handbag, she didn't have enough money to buy concert tickets.
Hanging out with friends, reading a book, and working out at the gym are activities that involve time
rather than money.
</h5></div><h5 id='q23'>23. The ELG Company is organized by its offerings, which includes a skin-care line, a cosmetics line, a haircare line, and a line of fragrances or perfumes. This is an example of a __________ organizational
structure based on ___________.</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. functional, market</option><option value="B">B. divisional, product</option><option value="C">C. matrix, location</option><option value="D">D. bureaucratic, department</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is B: divisional, product</h5><h5>A company that segments its operations by the type of item it sells is using a
divisional organizational structure based on product. Large companies may also use a divisional structure
based on the markets they serve. For example, motels, hotels, and resorts attract different types of
people or markets. Another form of divisional organization involves segmenting the business by
geographic location. A functional organizational structure is organized by a particular area of expertise or
business function or department. For example, the finance function of a business might segment its
activities in the areas of credit, accounting, and investing. Matrix organizational structures tend to share
resources. Frequently, employees with certain skills will be assigned different types of projects based on
the organization's needs. Large, inflexible organizations may use a bureaucratic structure, which is a
structure that is often associated with the way governments operate.
</h5></div><h5 id='q24'>24. The Canadian-based ZRV Company is allowing a Brazilian company to produce and sell products with
the ZRV name and logo in exchange for royalties. ZRV is expanding into global markets by</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. forming a multinational alliance.</option><option value="B">B. exporting goods and services.</option><option value="C">C. creating a wholly owned subsidiary.</option><option value="D">D. selling licensing rights.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is D: selling licensing rights.</h5><h5>Licensing occurs when one company allows another to produce and market its
products in exchange for royalties. Exporting involves selling goods and services to governments or
businesses in foreign countries. A wholly owned subsidiary involves establishing or purchasing a facility
in a foreign country. A multinational firm is a company that operates on a worldwide scale, though it is
organized under the laws of its home nation.
</h5></div><h5 id='q25'>25. When a civil war started in an oil-abundant country, fuel prices increased dramatically around the world.
As a result, businesses were forced to increase the prices of their products to offset the increases in their
transportation costs. This situation illustrates the ways in which</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. political factors affect the business environment.</option><option value="B">B. organizational changes affect consumer attitudes.</option><option value="C">C. technological advancements create unmet needs.</option><option value="D">D. exclusive agreements are detrimental to society.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is A: political factors affect the business environment.</h5><h5>Uncertainty due to changes in a country's government
or political environment can affect the way businesses operate—particularly when the country has scarce
natural resources that are in high demand, such as oil. Organizational changes, such as mergers,
executive resignations, and product-line changes are internal factors that affect the business
environment. The situation does not refer to technology or exclusive (selling) agreements.
</h5></div><h5 id='q26'>26. Which of the following statements is true regarding all types of economic systems:</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Bartering is the primary medium of exchange.</option><option value="B">B. The government controls the natural and human resources.</option><option value="C">C. Participants include producers, consumers, and government.</option><option value="D">D. Economic markets consist of more sellers than buyers.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is C: Participants include producers, consumers, and government.</h5><h5>Certain elements are found in all types of
economic systems. Every economic system has participants—producers, consumers, and government.
Producers make or provide products, consumers purchase products, and the government makes and
enforces the country's laws. The level of government control varies by the type of economic system.
Markets are arrangements for the buying and selling of goods and services. Economic markets are made
up of both buyers and sellers. The number of buyers and sellers differs and fluctuates among the
different types of economic systems. Bartering involves trading or exchanging one item for another.
Money is the most common medium of exchange in economic systems.
</h5></div><h5 id='q27'>27. What type of tax do businesses collect for items such as books, flowers, and shoes?</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Sales</option><option value="B">B. Income</option><option value="C">C. Estate</option><option value="D">D. Property

</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is A: Sales</h5><h5>Governments levy taxes to raise money to pay for various programs and initiatives. Sales tax is
typically charged on nonessential goods such as books, flowers, and shoes. Businesses (e.g., retailers)
that sell the goods collect the sales tax from their customers and give the money to the government at set
intervals. Governments levy income taxes, which are based on earnings (e.g., wages). Inherited items
are subject to estate taxes. Governments levy property taxes on land and property.
</h5></div><h5 id='q28'>28. As office manager of a small consulting firm, Isabelle is in charge of processing payroll, tracking accounts
payables and receivables, negotiating terms with vendors, and preparing a variety of company reports.
This is an example of</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. job enlargement.</option><option value="B">B. job rotation.</option><option value="C">C. task specialization.</option><option value="D">D. specialization by trade.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is A: job enlargement.</h5><h5>Job enlargement involves combining different tasks into one position. Employees may
perform different types of tasks during the course of one day. Because Isabelle is not performing one
very specialized task day in and day out, she is less likely to become bored with her job. Job rotation
involves moving from one job to another job within an organization. Job rotation helps employees learn
new tasks and understand how a variety of tasks relate to others in the organization. Task specialization
involves becoming highly skilled in one, very small portion of a job. Specialization by trade is the type of
work that a person performs in order to earn a living, such as engineering, public-relations, or accounting.
</h5></div><h5 id='q29'>29. Consumer spending to likely to decrease when</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. unemployment levels decrease for at least a year.</option><option value="B">B. interest rates decrease substantially.</option><option value="C">C. the production of goods and services increases.</option><option value="D">D. a federal-income tax increase is implemented.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: a federal-income tax increase is implemented.</h5><h5>Consumer spending is one factor that indicates well-being
of the economy. If the government increases taxes, consumers have less money to spend on other
things. Spending also tends to decrease as unemployment increases because consumers are not
working and do not have income to spend. Low interest rates and increased business activity are factors
that indicate that the economy is growing and that consumers are spending their money.
</h5></div><h5 id='q30'>30. Which of the following statements is true about inflation:</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. It decreases the value of money.</option><option value="B">B. It has little effect on consumers' ability to save.</option><option value="C">C. It is usually caused by a supply surplus.</option><option value="D">D. It increases when the money supply decreases.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is A: It decreases the value of money.</h5><h5>Inflation is a rise in prices. When there is a rapid rise in prices, it takes
more money to buy the same item. When this occurs, individuals and businesses buy less with the same
amount of money—the value of money decreases. Inflation can occur when there is an increase in the
money supply or when the availability of an item drops, but the demand remains the same or increases.
When prices increase, individuals and businesses often have less money to save and invest.
</h5></div><h5 id='q31'>31. Avery is a recent college graduate who is not working and is actively looking for a job. This is an example
of __________ unemployment.</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. structural</option><option value="B">B. frictional</option><option value="C">C. cyclical</option><option value="D">D. relational</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is B: frictional</h5><h5>Frictional unemployment is always present in the economy and occurs because there are
always workers who are in transition. Transitions occur for a variety of reasons. Avery is transitioning
from being a college student to being a member of the workforce. Other transitions might include
reentering the workforce after raising children or a change of career path. Structural unemployment
occurs when the demand for certain types of workers declines and is often due to technology
advancements and the need for new skills. Cyclical employment is the result of changes in the economic
and business cycles. For example, if the GDP declines, unemployment tends to increase. Relational is
not a type of unemployment.
</h5></div><h5 id='q32'>32. When interest rates are low, businesses tend to</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. implement selling policies.</option><option value="B">B. decrease production.
</option><option value="C">C. borrow for expansion.</option><option value="D">D. charge sales tax.
</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is C: borrow for expansion.</h5><h5>The interest rate is the percentage figure used to calculate interest. Many factors
affect interest rates, including government policies and the business cycle. Businesses often expand
when interest rates are low because it is less expensive to borrow money. Production is likely to increase
when interest rates are low because consumers tend to make larger purchases (e.g., homes, cars)
because it is less expensive to borrow money. When interest rates decrease, businesses may adjust
their credit policies rather than their selling policies. Governments levy sales taxes.
</h5></div><h5 id='q33'>33. If a country exports more than it imports, the demand for that country's currency will likely</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. stabilize over time.</option><option value="B">B. decrease.</option><option value="C">C. increase.</option><option value="D">D. remain the same.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is C: increase.</h5><h5>Balance of trade is one of many factors that affect the value of a country's currency. Because it
is difficult to achieve an equal balance of trade, currencies always fluctuate to some degree. When a
country exports more items than it imports over a period of time, the country's currency value increases.
This is because exporters are exchanging foreign currency for their domestic currency, driving up the
value of the domestic currency. When a country imports more than it exports, its currency value tends to
decline, the opposite tends to occur. Importers are exchanging their domestic currency for foreign
currencies to purchase foreign goods, which lowers the value of the domestic currency.
</h5></div><h5 id='q34'>34. Although Ed is a dedicated and knowledgeable employee, he is having a problem adjusting to the fact
that his new project manager is a woman. Ed is accustomed to seeing women in more passive roles
within his native country. This situation is an example of</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. cultural baggage.</option><option value="B">B. self actualization.</option><option value="C">C. self discipline.</option><option value="D">D. cultural reliance.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is A: cultural baggage.</h5><h5>Culture is the customs, habits, and traditions of a particular group. Each nation has its
own culture, which influences how their members view or experience other cultures. When people bring
those views and experiences to other cultures and feel conflicted about them, they are said to have
cultural baggage. Oftentimes, individuals do not realize that their cultural backgrounds impact their
feelings about and behavior toward members of other cultures. For example, Ed may be an individual
who has worked in another country (culture) for a long time. He may have adapted to different aspects of
that culture, and he may consider himself part of the culture's subculture. However, due to his upbringing
or long-term exposure to his native country's culture, he may carry cultural “baggage” into the subculture,
which is the country in which he works. Self actualization is maximizing or reaching your full potential.
Self discipline is the ability to train yourself to act in ways that will further your goals. Cultural reliance is a
fictitious term.
</h5></div><h5 id='q35'>35. An effective way for a company to reduce the number of distorted or false rumors that circulate the
company grapevine is by</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. limiting the employees' contact with one another.</option><option value="B">B. improving its formal communication with employees.</option><option value="C">C. meeting with employees to review their performance.</option><option value="D">D. developing ethical policies to guide the employees' behavior.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is B: improving its formal communication with employees.</h5><h5>The grapevine is an informal method of
communication. It often provides accurate, positive information, but it can also communicate negative,
distorted, or incorrect information or rumors. For example, employees who hear and spread rumors about
layoffs or salary cuts may not have sent or received accurate or complete information. If management
does not address the rumors, they can cause friction and anxiety in the workplace. To combat rumors,
management can take steps by communicating regularly with its employees through e-mail, newsletters,
memos, and meetings. By addressing rumors and responding honestly before the rumors get out of
hand, employees are more likely to trust and respect management, and listen less to the negative
communication that travels through the grapevine. In some situations, managers may not legally be able
to talk about issues, but it is important that they acknowledge the situation and explain why they cannot
comment. Successful businesses depend on employees who collaborate, so limiting their contact is a
detrimental and unrealistic option. The purpose of conducting employee performance reviews is to
evaluate an employee's work. Conducting performance reviews will not eliminate grapevine
communication. Developing ethics policies is important; however, unless the policies are communicated
to employees, the policies are pointless.
</h5></div><h5 id='q36'>36. Porter said to the group, “If we agree to proceed with this plan, the company's profitability will increase
substantially. Because the company will be saving a lot of money, we are more likely to receive a higher
pay increase next year.” Porter is persuading the group members by</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. expressing empathy.</option><option value="B">B. promoting benefits.</option><option value="C">C. exerting his authority.</option><option value="D">D. arguing on minor points.</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: promoting benefits.</h5><h5>Persuasion is the ability to get people to see things your way, to do things your way,
and to agree with you. Persuasion often involves appealing to others' wants and needs, and presenting
information in such a way that it encourages them to support the idea or action. In the example, Porter
discussed the benefit of a pay raise. Empathy is the ability to identify with another person's thoughts,
feelings, values, and actions. There is no indication that Porter holds a position of authority or that he is
arguing with someone on minor points.
</h5></div><h5 id='q37'>37. Claire said, “We need to resolve this quantity-discount issue and reach agreement by next Tuesday. If we
can't, I will solicit bids from other vendors.” What negotiating strategy is Claire using with her vendor?</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Good cop/Bad cop</option><option value="B">B. Deadline driven</option><option value="C">C. Limited authority</option><option value="D">D. Compromise

</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is B: Deadline driven</h5><h5>The deadline-driven strategy involves one party giving the other party a time limit to take
action. In the example, Claire gave her vendor a deadline—next Tuesday—to resolve a particular point.
Good cop/Bad cop is a negotiating strategy that involves at least two people on one side of the
negotiation; of the two people, one person is reasonable and agrees with the opposing party, while the
other is unreasonable and disagrees with the opposing party. Limited authority is a negotiating strategy
in which one person claims that s/he does not have the authority to make a decision and must consult
another person who is not present during the negotiation process. Bargaining is a negotiating technique
that involves giving one person something s/he wants, and receiving something desired in return, which
involves compromising.
</h5></div><h5 id='q38'>38. Matthew and Miranda are equal partners in a small consulting firm. They have allocated eight percent of
last year's profits to make business improvements. Matthew wants to purchase a new copy machine,
while Miranda would rather paint the building and make it look more inviting to their clients. What is the
reason for Matthew and Miranda's conflict?</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Limited resources</option><option value="B">B. Unclear boundaries</option><option value="C">C. Inconsistent behavior</option><option value="D">D. Authority</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is A: Limited resources</h5><h5>Businesspeople are more likely to scrutinize and want
supporting evidence for ideas that require additional resources or involve high risk taking, which could
make acceptance more challenging.
</h5></div><h5 id='q39'>39. Katie is feeling stressed because she is getting married next month, moving to a new city after the
wedding, and starting a new job after she moves. As a result, she is tired because she isn't sleeping well
and can't focus at work. What is the source of Katie's stress?</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Workplace burnout</option><option value="B">B. Multiple lifestyle changes</option><option value="C">C. Long-term financial difficulties</option><option value="D">D. Serious illness</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is B: Multiple lifestyle changes</h5><h5>Stress is a mental, physical, or emotional feeling of pressure or tension and
can be influenced by many factors. In Katie's situation, she is experiencing several life-changing events
all at once—getting married, moving, and starting a new job. When stress increases or continues for a
long period of time, it may negatively affect a person's physical health. Because Katie isn't sleeping well,
she is tired and unable to focus on her work. When an employee is unable to focus on work, s/he is more
likely to make mistakes. There is no indication that Katie is experiencing workplace burnout, long-term
financial difficulties, or a serious illness.
</h5></div><h5 id='q40'>40. Determine if the following statement is true or false: In effective work teams, every team member takes
on a leadership role.</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. True. Because every team member is expected to set individual team goals, all members are all
leaders.</option><option value="B">B. True. Because every team member contributes unique skills and talents, each person has the
potential to lead the team in different ways.</option><option value="C">C. False. Team members need the direction and guidance of a single person with broad knowledge
and insight.</option><option value="D">D. False. A team leader is necessary because s/he is responsible for establishing the team's goals
and monitoring the workload.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: True. Because every team member contributes unique skills and talents, each person has the
potential to lead the team in different ways.</h5><h5>Explanation not available</h5></div><h5 id='q41'>41. Determine if the following statement is true or false: Each group member has equal power in reaching a
consensus.</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. False. Consensus requires a few group members who have power.</option><option value="B">B. True. A majority rule voting process determines the outcome.</option><option value="C">C. False. Consensus involves rule by a single leader.</option><option value="D">D. True. Each group member has equal power to say yes or no.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is D: True. Each group member has equal power to say yes or no.</h5><h5>Consensus is a decision-making outcome
that requires the substantial agreement of each group member. To reach consensus, the option doesn't
have to be each group member's first choice, but the option must be agreed upon as an acceptable
option by all members of the group. Minority rule means that a few people in the group make the
decision. Consensus is not minority rule, is not rule by a single leader, and is not reached by a majority
rule vote in which all options are not acceptable to the group members.
</h5></div><h5 id='q42'>42. The Hilbert Company's employees receive a quarterly bonus for achieving their quotas. The company is
motivating employees by</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. contributing to a retirement fund.</option><option value="B">B. offering a profit-sharing plan.</option><option value="C">C. providing stock ownership options.</option><option value="D">D. linking pay to performance.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is D: linking pay to performance.</h5><h5>A financial incentive such as a bonus is a common way to reward employees
and motivate them to continue working hard. If they continue to work hard, they may receive another
bonus. In this way, the company is linking pay to employee performance. The bonus is not a component
of the company's profit-sharing plan, stock-ownership options, or retirement fund.
</h5></div><h5 id='q43'>43. Connor has the ability to look at situations in different ways, which helps him to resolve many of the
business problems that his company encounters. What characteristic of leadership is Connor exhibiting?</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. Integrity</option><option value="B">B. Credibility</option><option value="C">C. Authenticity</option><option value="D">D. Creativity</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is D: Creativity</h5><h5>Effective leaders generate new ideas and approaches to make improvements and solve
problems—they are exhibiting creativity. Credibility is a person's believability. Authenticity is being
genuine and sincere. Integrity is adhering to an established set of personal ethics and sound moral
principles.
</h5></div><h5 id='q44'>44. What is true about personal vision?</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Specific goals are necessary to determine your vision.</option><option value="B">B. Realistic visions are based on mission statements.</option><option value="C">C. Good visions have permanent results.</option><option value="D">D. Achievable visions are time bound.</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is C: Good visions have permanent results.</h5><h5>A vision is a desire for the future that is achieved over time with
determination and hard work. Good visions create positive results and may involve the input of many
people over a long period of time. Visions are not based on mission statements, nor do they start out with
specific goals. Visions are timeless rather than time bound.
</h5></div><h5 id='q45'>45. To demonstrate adaptability, it is important to recognize that</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. you can control the way others react.</option><option value="B">B. it is always okay to stay in your comfort zone. </option><option value="C">C. circumstances are always changing.</option><option value="D">D. fear of the unknown induces change.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is C: circumstances are always changing.</h5><h5>To be adaptable, you must first recognize that circumstances are
always changing. When you recognize that change is inevitable, then you can relax and develop a
mindset to “expect the unexpected,” which will better help you handle changes when they occur. Staying
in your comfort zone and being fearful are barriers to adaptability. Although you can't control the way
others react in a situation, you can control the way you react.
</h5></div><h5 id='q46'>46. Because Emma wants to excel in her job, she talks with her manager to get suggestions for ways in
which she can improve her efficiency and work quality. Emma is exhibiting an achievement orientation by</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. taking risks.</option><option value="B">B. soliciting feedback.</option><option value="C">C. being patient.</option><option value="D">D. setting goals.

</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is B: soliciting feedback.</h5><h5>Achievement orientation is a drive to accomplish one's goals and to meet or exceed
a high standard of success. Achievement-oriented people often want to do things better or more
efficiently than they have been done in the past. To find better ways to do things, achievement-oriented
people solicit feedback from others—coworkers, managers, etc. Emma is not setting goals, taking risks,
or being patient.
</h5></div><h5 id='q47'>47. To effectively lead change, you must first</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. indicate why the change is necessary.</option><option value="B">B. point out why others' ideas are unacceptable. </option><option value="C">C. monitor how others will view the change.</option><option value="D">D. communicate the urgency of the issue.</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is A: indicate why the change is necessary.</h5><h5>To effectively lead change, you must be able to guide others and
persuade them to alter their opinions or actions. Because some individuals have a difficult time accepting
and making changes, change leaders must be able to explain why the change is necessary and how the
change will benefit them. Others may or may not have other ideas about implementing change.
Immediately pointing out the negative aspects of others' ideas may put them on the defensive, and hinder
your effectiveness to persuade the individuals to accept your suggested change. You cannot assess how
others will view the suggested change until the change has been discussed. The reason for the change
should be communicated, regardless of the urgency of the issue.
</h5></div><h5 id='q48'>48. Effective collaborative partnerships among colleagues require</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. a sense of urgency.</option><option value="B">B. absence of conflict.</option><option value="C">C. authoritarian leadership.</option><option value="D">D. compatible goals.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is D: compatible goals.</h5><h5>Cultural reliance is a
fictitious term.
</h5></div><h5 id='q49'>49. Mia makes a conscious effort to dress professionally, arrive at work on time, work late when necessary,
take on extra assignments, and be respectful of and helpful to influential employees. As a result of Mia's
professional dedication, the company has implemented many of her ideas. This is an example of an
employee using __________ to achieve organizational goals.</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. reciprocity</option><option value="B">B. impression management</option><option value="C">C. excessive flattery</option><option value="D">D. codependency</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is B: impression management</h5><h5>If an employee has the ability to influence other workers' opinions or actions
within the company, the employee is fostering political relationships. Building positive political
relationships in the workplace begins by identifying and carrying out actions that will foster positive
relationships, which is impression management. Reciprocity involves doing something for another person
and expecting that person to return the favor at another time. Codependency is putting others' needs
above your own and can lead to dysfunctional relationships. Excessive flattery often comes across as an
insincere way of trying to get something from another person.
</h5></div><h5 id='q50'>50. Which of the following is a disadvantage of a checking account:</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Online transaction options</option><option value="B">B. Direct payroll deposit</option><option value="C">C. Overdraft protection</option><option value="D">D. Account balance requirement</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is D: Account balance requirement</h5><h5>Financial institutions often require customers to maintain a certain amount
of money in their bank accounts. The account holder may be charged fees, if the minimal account
balance requirements are not met. Direct payroll deposit, overdraft protection, and online banking service
are benefits or services that many types of checking-account products offer that customers may need to
pay fees to obtain.
</h5></div><h5 id='q51'>51. The yen, peso, and euro are types of</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. dollars.</option><option value="B">B. bonds.
</option><option value="C">C. stock.</option><option value="D">D. money.
</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is D: money.
</h5><h5>Explanation not available</h5></div><h5 id='q52'>52. When Brandon lost his job due to downsizing, the government sent him an unemployment check to help
him cover his living expenses until he found another job. What is Brandon's source of income?</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Rebate</option><option value="B">B. Transfer payment</option><option value="C">C. Refund</option><option value="D">D. Wage garnishment</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is B: Transfer payment</h5><h5>Income is money received from outside sources. Sources of income include salaries,
interest earned, dividends, rent, and transfer payments. Transfer payments are monies paid by the
government in which no goods or services are received in exchange, such as welfare benefits, veterans'
benefits, disaster aid, and unemployment. To receive transfer payments, individuals, businesses, or
jurisdictions must meet certain criteria. A rebate is a return of part of the price a customer pays for a
product, usually from the product's manufacturer. A refund is a sum of money given back to individuals or
businesses. Refunds are issued when an excessive amount has been paid (e.g., tax refund) or when
items have been returned to a business. Wage garnishments are court-ordered initiatives that involve
taking income taken from an employee's salary and submitting it to another person or organization.
Examples of garnishments include child support and alimony.
</h5></div><h5 id='q53'>53. Max set a financial goal of saving $2,000 in the next year. On a whim, Max saw a new video game that
he wanted, so instead of putting a portion of his paycheck in his savings account, he used that money to
purchase the game. What barrier is preventing Max from reaching his goal?</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Overuse of credit</option><option value="B">B. Impulsive spending</option><option value="C">C. Unexpected needs</option><option value="D">D. Loss of income</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is B: Impulsive spending</h5><h5>Many situations can prevent individuals from reaching their financial goals. When
people lose their jobs or need to get their cars fixed, their financial goals may be temporarily sidetracked.
Overusing and repaying credit cards can also affect an individual's ability to achieve his/her financial
goals. An individual who must pay off credit-card debt has less money available to save and invest. In
Max's situation, impulsive spending derailed his financial goals. He saw something that he wanted right
away, so he bought it without thinking about the consequences. It will likely take Max longer to reach his
savings goal.
</h5></div><h5 id='q54'>54. When reconciling your check register, it is important to __________ your balance.</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. subtract your earned interest from</option><option value="B">B. add your debit card transactions to</option><option value="C">C. subtract all applicable fees from</option><option value="D">D. add ATM withdrawals to</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is C: subtract all applicable fees from</h5><h5>The check register is a central location to record and track all of the
checks that you write and the amount of money you spend in your checking account. Each month, you
receive a bank statement that details your checking-account activity. You should reconcile your check
register with your bank statement to ensure that they match. This step is important for many reasons. For
example, if you forget to enter transactions in your check register, you may overdraft your account and be
fined for insufficient funds. When reconciling your check register, you want to make sure that you have
subtracted all fees including debit card transactions and ATM withdrawals. You should add the interest
earned if your account is set up to earn interest.
</h5></div><h5 id='q55'>55. It is important to review your credit report on a regular basis to</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. set your credit limit.</option><option value="B">B. change your credit score.</option><option value="C">C. identify discriminatory practices.</option><option value="D">D. verify its accuracy.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is D: verify its accuracy.</h5><h5>A credit report is a record of your credit history. Businesses and individuals can
obtain their credit reports from authorized credit bureaus. The advantage to reviewing your credit report
on a regular basis is that you can verify that the information is correct. Incorrect information can affect
your ability to obtain credit or a loan, so it is important to check for and correct any inaccurate information
that you find in your credit report. Businesses and individuals can improve their credit scores by using
credit wisely and by taking action to correct inaccurate information; however, they cannot change credit
scores—only authorized credit bureaus can do so. Credit-card issuers set credit limits and often review
your credit report to determine the amount of credit they are willing to extend to you. Credit reports do not
identify discriminatory practices.
</h5></div><h5 id='q56'>56. Monitoring financial accounts and reading bank statements on a regular basis can help detect activities
associated with</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. personal hijacking.</option><option value="B">B. property infringement.</option><option value="C">C. identity theft.</option><option value="D">D. securities fraud.</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is C: identity theft.</h5><h5>Monitoring financial accounts and reading bank statements helps you identify unusual
transactions, purchases, or money withdrawals. If inconsistencies are detected, you can notify your
financial-services providers to hold or close your accounts to prevent further use by identity thieves.
Intellectual property infringement involves using copyrighted, trademarked, or patented property without
the owner's permission. Hijacking is using force to seize a vehicle (e.g., aircraft, car) in transit. Securities
fraud involves using deception to convince investors to purchase securities.
</h5></div><h5 id='q57'>57. Individuals are most likely to require the services of a mortgage company when they want to</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. invest in the stock market.</option><option value="B">B. acquire liability insurance.</option><option value="C">C. purchase real estate.</option><option value="D">D. earn interest on savings.

</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is C: purchase real estate.</h5><h5>Mortgages are loans specifically designed for the purchase of real estate—land,
residences, and other types of buildings. Individuals may want to purchase a home to live in or an
apartment building to lease to others. Apartment buildings allow individuals to generate income by renting
apartment space to others. To transfer risk, individuals purchase various types of insurance from
insurance companies. To invest in the stock market, an individual is likely to consult with a stockbroker or
a financial planner. Deposit-taking institutions (e.g., retail banks) provide savings accounts on which
individuals can earn interest.
</h5></div><h5 id='q58'>58. While reviewing financial information, Troy noted that the company earned $245,956 in January,
$248,122 in February, and $252,878 in March. Which of the following most likely summarizes the
company's financial situation:</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Cash flow continues to be tight.</option><option value="B">B. Sales are steadily increasing.</option><option value="C">C. Accounts receivable exceed accounts payable.</option><option value="D">D. Capital assets are depreciating at a slower rate.</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is B: Sales are steadily increasing.</h5><h5>One reason that businesses analyze financial information is to identify
trends. In the example, the company's income has been steadily increasing for three months. Businesses
generate income in a number of ways, and product sales are usually the greatest source of income for a
business. If sales are increasing, the company may be able to expand or increase the employees'
salaries. With the information provided, it cannot be determined if cash flow continues to be tight for the
business, if accounts receivable exceeds accounts payable, or if the depreciation rate of capital assets is
slower.
</h5></div><h5 id='q59'>59. Accounting software applications facilitate a business's ability to efficiently track income and expenses,
manage inventory, and</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. plan work projects.</option><option value="B">B. process payroll.</option><option value="C">C. establish insurance policies.</option><option value="D">D. organize media transcripts.</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is B: process payroll.</h5><h5>Accounting software programs allow businesses to efficiently track various financial data
and generate financial reports. Businesses use accounting software to track budgets, income, expenses,
and bank transactions. Many comprehensive accounting software programs have applications to process
payroll and taxes, forecast sales, and manage inventory. Businesses use project-management software
to plan and execute projects. Businesses do not use accounting software to establish insurance policies
or to organize media transcripts.
</h5></div><h5 id='q60'>60. A primary reason governments regulate business accounting practices is to</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. balance the business's budget.</option><option value="B">B. certify aging accounts.</option><option value="C">C. stabilize tax revenue.</option><option value="D">D. ensure consistent reporting.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is D: ensure consistent reporting.</h5><h5>The accounting function is responsible for collecting and reporting the
business's financial information. Governments require businesses to provide certain types of financial
information to regulatory agencies and shareholders in specific ways. By requiring businesses to follow
the same standards and rules, financial reports are prepared in a consistent way, so the information is
clear to all people who read and work with financial information. The primary reason that governments
regulate business accounting practices is not to certify aging accounts, stabilize tax revenue, or to
balance the business's budget.
</h5></div><h5 id='q61'>61. Balancing the business's objective to make a profit with the interests of all the business's stakeholders is
a primary consideration related to the business's</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. financial ethics.</option><option value="B">B. creative processes.</option><option value="C">C. maintenance activities.</option><option value="D">D. forecasting methods.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is A: financial ethics.</h5><h5>An important aspect of financial ethics is making sure the business makes a profit and
serves the best interests of its stakeholders (e.g., employees, customers, investors). This would include
honest communication, transparent financial reporting, and fair pricing practices. Creative processes,
maintenance activities, and forecasting methods are important business considerations; however, these
activities are not directly related the business's profitability and the stakeholders' best interests.
</h5></div><h5 id='q62'>62. Instead of transferring the company's money to the company's bank account, Oscar placed it in an
offshore bank account that only he had access to. When the company's officers found out what Oscar
had been doing, they filed charges against him, and law enforcement officers arrested Oscar for</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. embezzlement.</option><option value="B">B. securities fraud.</option><option value="C">C. insider trading.</option><option value="D">D. espionage.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is A: embezzlement.</h5><h5>Embezzlement involves theft of valuables that have been entrusted to another's care. In
the example, the company entrusted Oscar with placing the company's money in one account, and
instead, Oscar put the money in a bank account that only he had access to. Oscar was stealing money
from the company. Insider trading involves leaking information to others that is not known to the public.
Securities fraud involves the use of misleading sales tactics to persuade investors to purchase securities.
Espionage involves revealing confidential information without the source or owner's permission and is
often associated with spying.
</h5></div><h5 id='q63'>63. What is the advantage of using a rolling or continuous budget?</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. It eliminates the need for the business to develop a master budget.</option><option value="B">B. It requires managers to demonstrate the need for every expense at one time.</option><option value="C">C. It provides managers with the ability to accurately forecast unexpected expenses.</option><option value="D">D. It encourages managers to assess activities and adjust figures more frequently.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is D: It encourages managers to assess activities and adjust figures more frequently.</h5><h5>A rolling (continuous)
budget replaces each passing month with a new month added to the end of the budget, so there is
always a year-long budget in place. Because a new month is added to the budget on a regular basis,
managers need to assess and adjust figures on a monthly basis to reflect the various factors that
influence business activities. By being able to change and adapt, the rolling budget provides the business
with flexibility. The zero-based budgeting method requires managers to demonstrate the need for every
expense. Although unexpected expenses do come up and should be a consideration when establishing
any type of budget, a rolling budget does not provide managers with an advantage over other budgeting
methods in terms of forecasting unexpected expenses. A rolling budget does not eliminate the need for a
master budget. A master budget can be developed using the rolling budget methodology.
</h5></div><h5 id='q64'>64. Is it unethical for a manager to promote an employee who is also the manager's friend?</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Yes, it is appropriate to promote a friend.</option><option value="B">B. No, if the employee is not the same gender as the manager.</option><option value="C">C. No, if the appropriate procedures are followed, and the employee is the most qualified candidate.</option><option value="D">D. Yes, other employees will file discrimination claims, which will damage the company's reputation.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is C: No, if the appropriate procedures are followed, and the employee is the most qualified candidate.</h5><h5>Explanation not available</h5></div><h5 id='q65'>65. A well-prepared new employee orientation program should</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. verify the new employees' job qualifications.</option><option value="B">B. outline the employer's specific financial goals.</option><option value="C">C. communicate the employer's philosophy and expectations.</option><option value="D">D. set aside time to negotiate the employees' salary requirements.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is C: communicate the employer's philosophy and expectations.</h5><h5>A good orientation program sets the tone for
the new hire's experience with the company. It answers basic questions for new employees and helps
them to feel welcome and comfortable in their new surroundings. It often involves giving tours to
familiarize the employees with the facilities, completing the required paperwork, distributing employee
handbooks, and introducing them to their new colleagues. A very important aspect of orientation is to
communicate the employer's philosophy and behavioral expectations so the employee can adapt
accordingly. The purpose of the orientation session is not to go over specific financial goals. Job
qualifications are verified during the interview process. Salaries are negotiated after the employer
extends the job offer and before the candidate (new employee) accepts the offer.
</h5></div><h5 id='q66'>66. What type of buying behavior involves low customer involvement, significant brand awareness, and a
desire for change?</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Variety-seeking</option><option value="B">B. Risk-taking</option><option value="C">C. Status-oriented</option><option value="D">D. Brand-insisted</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is A: Variety-seeking</h5><h5>This type of buying behavior usually involves the purchase of routine items such as
cookies, shampoo, and socks. The buyer might be very aware of the differences among brands, but feels
a desire to try something different. Because the items are relatively inexpensive, there is no great risk in
trying something new. Brand insistence occurs when a buyer will not buy anything other than a specific
brand or product. People who purchase status-oriented items are motivated by a desire to have the best
quality, most expensive, or trendiest goods and services.
</h5></div><h5 id='q67'>67. Employees can help their employers meet important deadlines by</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. resolving complaints.</option><option value="B">B. staying on task.</option><option value="C">C. improving profitability.</option><option value="D">D. following trends.

</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is B: staying on task.</h5><h5>Employees who stay on task are focused on the activity at hand and do not allow
themselves to be distracted. When employees are focused on their work, they are more likely to finish
their assignments and meet deadlines. Meeting deadlines is an important aspect of achieving the
company's goals. Tasks vary by job and may or may not include communicating with customers and
vendors, finishing reports, and developing products within a set time frame. Following trends is an
ongoing process that helps the company identify new markets and changing needs and, if acted upon,
can improve the company's profitability.
</h5></div><h5 id='q68'>68. The following statement appeared in an online journal article written by Dr. Lydia Garrett:
“Dr. Sanderson has limited expertise in the area of biophysics, and I do not believe that he has
conducted enough research to support his theory.”
This is an example of</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. hearsay.</option><option value="B">B. supporting evidence.
</option><option value="C">C. an opinion.</option><option value="D">D. a fact.
</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is C: an opinion.</h5><h5>It is important to separate opinion from fact, when analyzing information. An opinion is a
person's point of view or belief. In the example, the author (Dr. Garrett) is expressing her opinion about
another individual's (Dr. Sanderson) research. The author does not provide specific facts or data to
support her opinion. Facts contain true data or information. Hearsay is gossip or rumor.
</h5></div><h5 id='q69'>69. Eric is viewing the results for an online search about the current economic situation in North America.
Which of the following is going to provide Eric with the most reliable information:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. A six-page report written in 2009 by a Canadore College student for an economics class</option><option value="B">B. An article written by a Harvard economics professor that was published in a business magazine
last month</option><option value="C">C. An excerpt from a second-edition high-school economics textbook that was published in the fall
of 2005</option><option value="D">D. A two-day-old video clip of a CNN interview with a 16-year-old entrepreneur from Sheboygan,
Wisconsin</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is B: An article written by a Harvard economics professor that was published in a business magazine
last month</h5><h5>Explanation not available</h5></div><h5 id='q70'>70. Due to obsolescence, the format in which a business stores its information must often be</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. archived.</option><option value="B">B. updated.</option><option value="C">C. processed.</option><option value="D">D. summarized.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is B: updated.</h5><h5>Obsolescence occurs when something is outdated. Technology is always evolving, so
computer systems and applications are always subject to obsolescence. Businesses must update the
ways in which they store or archive their information because the format may not be usable in the future.
For example, modern computers do not have outlets that read floppy disks, which were popular external
storage devices several years ago. The way people summarize or process information is not related to
the state of obsolescence.
</h5></div><h5 id='q71'>71. The Lee Company must pay a settlement to Smith Industries because Lee used Smith's logo on its web
site and other printed materials without Smith's permission. The Lee Company has violated</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. trade-secret regulations.</option><option value="B">B. intellectual property laws.</option><option value="C">C. patent-registration codes.</option><option value="D">D. local ordinances.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is B: intellectual property laws.</h5><h5>Intellectual property is assets resulting from thinking processes. Written and
artistic works, symbols (e.g., logos), words, trade secrets, and inventions are types of intellectual property
that can be legally protected from the unauthorized use of others. In most countries, intellectual property
protection is legislated by the national (federal) level of government rather than the local level of
government. By registering its logo with the government, a business's logo has trademark protection. If
another company uses the logo without the owner's permission, then the logo's owner can file a lawsuit
against the company to stop the unauthorized use. And in some situations, the owner can obtain
monetary damages from the unauthorized user. Trade secrets are types of knowledge that can be used
to obtain an economic advantage. Formulas, recipes, and customer lists are examples of knowledge
covered under trade-secret laws. Individuals and businesses obtain patent protection for their inventions.
</h5></div><h5 id='q72'>72. Important functions of a business's information system are to help it to __________ its important facts
and data.</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. organize and store</option><option value="B">B. mediate and retrieve</option><option value="C">C. analyze and instruct</option><option value="D">D. duplicate and renew</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: organize and store</h5><h5>An information system is a method of gathering, storing, and analyzing data for the
purpose of making business decisions. Because a business acquires large amounts of information, it
must develop a structure to organize and store data and facts to make them useful to the business. An
effective information system enables a business to access, retrieve and analyze the stored data and facts
accurately and efficiently, which facilitates the business's decision-making processes. Primary functions
of a business's information system are not to mediate, instruct, duplicate, or renew the business's facts
and data.
</h5></div><h5 id='q73'>73. William is thinking about getting a new smartphone, so he logged on a well known web site to read
others' opinions and experiences with different types of smartphones that are currently on the market.
William is reading Internet product reviews to</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. reaffirm his recent purchasing selection.</option><option value="B">B. compare the prices of smartphones from various online stores.</option><option value="C">C. determine which company has the best phone plan.</option><option value="D">D. make an informed buying decision.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is D: make an informed buying decision.</h5><h5>The Internet has revolutionized the ways in which business is
conducted. The Internet provides customers with the ability to obtain product information in a variety of
ways—from business web sites, blogs, newsfeeds, and consumer information web sites. In the example,
William is doing research to find out how other users like different smartphones before he makes a
decision about the one that he wants to buy. William will likely visit various smartphone e-tailers to get
product specifications and pricing before making his decision. Although phone plans are often a factor
when making a mobile-phone purchasing decision, there is not enough information provided to determine
whether phone plans will affect William's buying decision. William hasn't purchased his smartphone yet,
so he can't reaffirm his recent purchase.
</h5></div><h5 id='q74'>74. What types of applications help computer users manage their appointments and work activities through
e-mail software programs?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Address book, task, and workbook features</option><option value="B">B. Calendar, address book, and view mechanisms</option><option value="C">C. Contact, workbook, and view settings</option><option value="D">D. Task, calendar, and contact functions</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is D: Task, calendar, and contact functions</h5><h5>E-mail software programs, such as Microsoft Outlook, have
applications that help businesspeople manage their time and work. Applications such as task organizers,
calendars, contact (address book) functions help businesspeople keep track of appointments, travel
plans, and due dates. In the Excel spreadsheet program, a workbook consists of worksheets, which is
where the computer user enters and manipulates data. View settings allow computer users to change the
size of the document they are viewing on the computer screen.
</h5></div><h5 id='q75'>75. A business wants to send a mailing to all customers who have ordered at least $2,500 in merchandise in
the past year. To obtain the appropriate list of customers, the business should set the query by</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. sales dollars and dates.</option><option value="B">B. last name and account number.</option><option value="C">C. product code and zip code.</option><option value="D">D. credit rating and location.</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is A: sales dollars and dates.</h5><h5>A database software program allows a business to sort customer information by
various criteria—customer name, sales volume, customer type, zip code, etc. Queries are database fields
that the business uses to sort the data. The type of data that the business wants to retrieve or analyze
determines the database query (sorting mechanism) that the business uses. To obtain the desired
customer list, the query should include the minimal sales dollars ($2,500) and the desired dates (e.g.,
April 2, 2010 - March 31, 2011). The product codes, the customers' last names, account numbers, zip
codes, cities, and credit ratings will not yield the desired results.
</h5></div><h5 id='q76'>76. Haley has completed a new page to add to her employer's existing web site. What does she need to do
next?</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Upload the page to the web server</option><option value="B">B. Obtain a domain name</option><option value="C">C. Select an Internet service provider</option><option value="D">D. Add the page to the internal network

</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is A: Upload the page to the web server</h5><h5>After creating the page using a web site design program, the user
needs to upload the page to the web server, which is where all of the business's web pages are stored.
Because Haley is working with an existing web site, she already has a domain name or web address for
the site. The Internet service provider may offer web hosting services. An intranet is an internal network
of computers within an organization.
</h5></div><h5 id='q77'>77. When an existing customer's contact information changes, what should a company do?</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Update the customer's record in the company database</option><option value="B">B. Create a new record that contains the customer's changes</option><option value="C">C. Add the customer's record in the employee directory</option><option value="D">D. Enter the customer's contact information in a new database</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is A: Update the customer's record in the company database</h5><h5>Businesses keep a variety of customer
information in a central location—a computer database. When customers change phone numbers and email addresses, move, or go out business, companies need to update their customer database to reflect
those changes. If the information is not changed, the business does not have current contact information.
This can be costly to the business in situations that involve delinquent accounts and returned mail. The
business does not need to create a new record to reflect changes—this would clutter the system with
unnecessary data—nor does the business need to create a new database every time a customer's
contact information needs to be updated. Employee records, rather than customer records, appear in the
company or employee directory.
</h5></div><h5 id='q78'>78. During the busy tourist season, a coastal surf shop sold 398 beach balls in June, 924 beach balls in July,
and 537 beach balls in August. This information reveals that</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. the supply of beach balls declined in June by four percent.</option><option value="B">B. more tourists purchased beach balls in July than June and August combined.</option><option value="C">C. beach-ball production rates increased in August.</option><option value="D">D. the demand for beach balls peaked during July.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is D: the demand for beach balls peaked during July.</h5><h5>Statistics are information presented in numerical form.
Businesses analyze and interpret statistics to make various business decisions, such as forecasting
sales. By analyzing statistical information, the surf shop can plan its beach-ball orders to accommodate
the anticipated demand. The provided data show that the surf shop sold the most beach balls during July,
which indicates that the demand for beach balls peaked in July. Although the demand for beach balls
declined in August, there is not enough information to determine if the production of beach balls
increased during that time. Because statistical information is not provided for previous months, it is not
possible to determine if the supply of beach balls declined by four percent in June. The number of beach
balls purchased in June and August totaled 935, which indicates that the combined sales for June and
August exceeded the July's beach-ball sales. In addition, there is not enough information provided to
determine if tourists were the only group of people who purchased beach balls.
</h5></div><h5 id='q79'>79. Which of the following is unethical behavior in the operations function of business:</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Using negotiating techniques to encourage a vendor to make concessions</option><option value="B">B. Sharing a vendor's competitive bid information with another supplier</option><option value="C">C. Developing scorecards to evaluate suppliers' performance levels</option><option value="D">D. Setting deadlines for vendors to submit their bids</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is B: Sharing a vendor's competitive bid information with another supplier</h5><h5>It is unfair for a business to share a
vendor's bid information with another supplier because it provides one supplier with an advantage over
the other. Using negotiating techniques to obtain concessions, developing scorecards to evaluate
suppliers' performance levels, and setting deadlines for bids are ethical activities.
</h5></div><h5 id='q80'>80. WTZ Manufacturing acquired new equipment that performs production activities that were previously
carried out by employees. This is an example of</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. ergonomics.</option><option value="B">B. customization.</option><option value="C">C. outsourcing.</option><option value="D">D. automation.</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is D: automation.</h5><h5>Technological advancements have lead to production automation, which involves the use of
machines to carry out production tasks. Automated production activities increase efficiency, reduce costs,
and provide consistent products. The downside of automation is displaced workers. Customization is the
process of making unique goods or services according to a customer's specific needs or wants.
Outsourcing is acquiring assistance from outside organizations/consultants to obtain goods or services to
accomplish the business's objectives. Ergonomics is the study of the use of equipment or technology and
its effects on workers' physical well-being.
</h5></div><h5 id='q81'>81. Trevor works with dangerous equipment on a busy production line. Several months ago, he noticed that
one of the machines was not operating correctly, so he notified his supervisor about the problem. Since
then, Trevor has reminded his supervisor about the issue several times and has reported the problem to
the vice president of operations. Still, the machine has not been fixed. Should Trevor report the
noncompliance to the government?</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. No. Trevor's nagging is causing friction with his company's management staff, and he could lose
his job for stirring up trouble.</option><option value="B">B. Yes. Before he reports the noncompliance, Trevor should tell his supervisor what he plans to do,
and use the information as leverage to get a promotion.</option><option value="C">C. No. Trevor has done all he can to resolve the issue and it is up to management to schedule the
repair.</option><option value="D">D. Yes. Management is behaving irresponsibly because the equipment may injure the workers who
use it.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is D: Yes. Management is behaving irresponsibly because the equipment may injure the workers who
use it.</h5><h5>Explanation not available</h5></div><h5 id='q82'>82. What is needed to effectively handle situations such as fire, injury, bomb threats, and robbery that might
occur on the business's property?</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. An emergency plan</option><option value="B">B. An operating strategy</option><option value="C">C. A surveillance system</option><option value="D">D. An evacuation map</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is A: An emergency plan</h5><h5>Comprehensive emergency plans contain policies and procedures for many types of
situations that the business might experience. The plan might address issues such as evacuation plans
for fire, bomb threats, and weather-related incidents. The emergency plan might include policies for
handling injuries, illnesses, and robberies. The business needs to ensure that employees know what to
do in these situations by providing ongoing training.
</h5></div><h5 id='q83'>83. Lily is the last employee to leave the building today. To reduce the risk of theft, Lily should __________
before she _________.</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. turn off the lights, sets the security alarm</option><option value="B">B. set the security alarm, locks the doors</option><option value="C">C. turn on the surveillance camera, adjusts the thermostat</option><option value="D">D. adjust the thermostat, turns on the surveillance camera</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is B: set the security alarm, locks the doors</h5><h5>Businesses install locks and security alarms to protect their
facilities from theft and burglary. Depending on the business's procedures, the last employee to leave for
the day should set the security alarm and lock the door. In some situations, the security alarm can be set
with a remote device after the employee leaves the building and locks the doors. Turning off the lights
and adjusting the thermostat will not protect the building from unlawful entry. Turning on a surveillance
camera may deter and identify thieves and burglars, but this will not prevent them from entering the
building.
</h5></div><h5 id='q84'>84. Why might a business obtain a trademark for its intellectual property?</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. To protect the integrity of the business's logo</option><option value="B">B. To prevent the publication of the business's written work</option><option value="C">C. To keep competitors from using the business's manufacturing processes</option><option value="D">D. To stop the unauthorized use of the business's inventions

</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is A: To protect the integrity of the business's logo</h5><h5>Trademarks protect unique symbols, designs (e.g., logo),
or words that businesses use to identify their brands. A business can legally protect its logo from
unauthorized use by registering the logo with the appropriate government agency. If an unauthorized
entity compromises or uses the logo in harmful, embarrassing, or negative ways, trademark protection
provides the business with legal recourse. Copyrights provide legal protection for written, musical, and
artistic works. Patents are obtained to legally protect inventions and certain types of processes (e.g.,
unique manufacturing processes) for a limited amount of time.
</h5></div><h5 id='q85'>85. Which of the following is an activity performed during the planning phase of a project:</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Schedule implementation (execution)</option><option value="B">B. Budget development</option><option value="C">C. Concept identification</option><option value="D">D. Feasibility analysis</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is B: Budget development</h5><h5>During the planning phase of a project, the project manager develops the budget,
prepares the work breakdown structure, and allocates resources. During the execution phase, the work
activities are implemented in accordance to the project schedule. The project-definition phase involves
identifying the project concept and conducting a feasibility analysis.
</h5></div><h5 id='q86'>86. Tatiana is a project manager who is ready to close a project, and has scheduled a “lessons learned”
meeting with the project team. What will Tatiana most likely include on her meeting agenda?</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. The definition of the project's purpose</option><option value="B">B. Discussion of specific challenges encountered</option><option value="C">C. Explanation of the stakeholders' expectations</option><option value="D">D. The distribution of project resources allocated</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is B: Discussion of specific challenges encountered</h5><h5>After the stakeholders receive the deliverables, the
project manager often meets with the team members to discuss what went well and what didn't go well
with the project. The team members also discuss how processes could have been improved. The
information obtained from the “lessons learned” meeting is summarized in a “lessons learned” document,
which can be used by teams that execute similar projects for the organization in the future. The project's
purpose and the stakeholders' expectations are explained during the initiation phase of the project. The
allocation of resources is determined during the planning phase of the project.
</h5></div><h5 id='q87'>87. As owner of the Zoom Company, Trinda will need to manage the bidding process between possible
suppliers. She created the following chart as part of the process. Which factor does Zoom Scooter Co.
feel is the most important when evaluating suppliers?
Supplier: Ace Tires, Inc.
Category
Score (1-5)
Cost structure
3
On-time delivery
4
Product quality
5
Technological
5
capability
</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Product quality</option><option value="B">B. On-time delivery

Weight
0.4
0.2
0.3
0.1
</option><option value="C">C. Cost structure</option><option value="D">D. Technological capability
</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is C: Cost structure</h5><h5>What quality control method is the
company using?
A. Material classification
C. Product testing
B. Random inspection
D. Commodities sampling
90. Which of the following expenses should Charlene categorize as a fixed cost:
A. Cost of goods sold
C. Rent
B. Delivery charges
D. Commissions
91. Martin had a problem obtaining information that he needed to perform his job. One day, Martin had an
idea that he thought would resolve his problem, and discussed the idea with his manager. Martin's
manager liked the idea and set up a meeting with the company's IT department staff members to discuss
it in further detail. During the meeting, the participants determined that it was feasible to expand and
implement this idea over a period of several months in a way that would benefit Martin, as well as other
departments, which would increase the company's overall efficiency. In this situation, the source of
innovation is
A. Martin.
C. the technology department.
B. the management team.
D. the employees.
92. You should obtain maximum input from others when you are making decisions that
A. are routine in nature.
C. require logical thinking.
B. affect others significantly.
D. involve limited consideration.

2011 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

11

93. William was having a hard time coming up with ideas to solve a problem that he was having at work. He
decided to write down some things that he could do to make the problem worse. He then reviewed each
negative statement and thought of ways to improve the situation. What problem-solving technique was
William using?
A. Appreciative inquiry
C. Reverse brainstorming
B. Mind mapping
D. Attribute listing
94. Because Valerie has the ability to look at issues and problems without bias, she often comes up with very
innovative ideas and solutions. What trait of creativity does Valerie possess?
A. Curiosity
C. Independence
B. Open-mindedness
D. Self-awareness
95. Because Alexa enjoys working with children and has a knack for developing fun activities that help them
understand puzzles and numerical formulas, she might consider a career as a
A. math teacher.
C. computer programmer.
B. graphic designer.
D. financial planner.
96. As a new business owner, Thomas is willing to work long hours, watch his spending, and sacrifice his
social life to focus on building his clientele. What entrepreneurial trait is Thomas exhibiting?
A. Objectivity
C. Organization
B. Humility
D. Determination
97. What is the first step in completing a job application?
A. Listing personal references
B. Completing the form's work history section
C. Identifying questions that do not apply to the applicant
D. Reading the entire form to follow directions
98. An effective way to close a job interview follow-up letter is to
A. reinforce your interest in the position.
B. communicate your minimum salary requirements.
C. acknowledge your desire to be promoted.
D. ask the interviewer to read your résumé.
99. Last week, Marcus attended a friend's birthday party and talked with Lynnette, a manager with the
Trendall and Young accounting firm. Marcus mentioned that he is a technology major and will be looking
for a job after he graduates in June. Lynnette gave Marcus her business card, and told him that her firm
might be hiring during the summer months. The interaction between Marcus and Lynnette is an example
of
A. informal interviewing.
C. professional networking.
B. social etiquette.
D. community resourcing.
100. Which of the following is an example of career advancement within a company:
A. Audrey was hired as a sales coordinator, was promoted to salesperson, and is now sales
manager of CTK Corporation.
B. After RQW Technologies offered Dylan a similar management position and 15% salary increase,
he resigned as systems manager with TechFi.com.
C. When James reached his 25-year anniversary as production manager of Whitman
Manufacturing, he decided to retire.
D. Julia accepted a marketing manager position with GZA International because she became bored
with her advertising coordinator position with Drexall Publishing.

2011 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM—KEY

12

1. B
Breached the duty of care. The duty of care is the basic principle that expects all individuals and
businesses to exhibit socially responsible behavior by using caution to prevent harm and by watching out
for one another. A tort is a private wrongdoing that potentially harms another person or entity. If a
business or one of its employees breaches the duty of care, the business may be held liable for the tort.
However, the plaintiff must have grounds or proof that establishes that the business or its employee
(defendant) has committed a wrongful act, thereby breaching the duty of care. Intentional damage and
conspiring with a competitor (collusion) are types of torts. The doctrine of sovereign immunity is the
universally accepted principle that each nation has the right to manage its own government and develop
its own laws.
</h5></div><h5 id='q88'>88. What is an important consideration for many large businesses when they are selecting vendors?</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Segmentation method</option><option value="B">B. Technological capabilities</option><option value="C">C. Compensation policies</option><option value="D">D. Asset depreciation</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is B: Technological capabilities</h5><h5>Businesses evaluate their vendors' technological frameworks because they
want to be able to communicate efficiently and streamline ordering, shipping, and inventory processes.
Businesses also consider the vendors' terms-of-sales policies. Compensation policies are internal
policies that guide the way a business compensates its employees. Segmentation methods and asset
depreciation are not primary considerations for vendor selection.
</h5></div><h5 id='q89'>89. An automobile company conducted systematic accident simulations by crashing their cars and trucks into
cement walls at various speeds. Results of the simulation were used to evaluate how well the vehicles
held up and to determine weaknesses in the vehicles' structure. What quality control method is the
company using?</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Material classification</option><option value="B">B. Random inspection</option><option value="C">C. Product testing</option><option value="D">D. Commodities sampling</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is C: Product testing</h5><h5>Product testing is a quality control method that businesses use to evaluate the durability
and safety of their goods. The businesses use the testing results to take corrective action and improve
product weaknesses. The automobile company is not conducting random inspections of products,
classifying product materials, or sampling commodities.
</h5></div><h5 id='q90'>90. Which of the following expenses should Charlene categorize as a fixed cost:</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Cost of goods sold</option><option value="B">B. Delivery charges</option><option value="C">C. Rent</option><option value="D">D. Commissions</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is C: Rent</h5><h5>Fixed costs are business expenses that do not change with changes in sales volume. Fixed costs
include items such as salaries, rent, mortgage, and property taxes. Variable costs are business costs that
change and include commission, delivery charges, and cost of goods sold.
</h5></div><h5 id='q91'>91. Martin had a problem obtaining information that he needed to perform his job. One day, Martin had an
idea that he thought would resolve his problem, and discussed the idea with his manager. Martin's
manager liked the idea and set up a meeting with the company's IT department staff members to discuss
it in further detail. During the meeting, the participants determined that it was feasible to expand and
implement this idea over a period of several months in a way that would benefit Martin, as well as other
departments, which would increase the company's overall efficiency. In this situation, the source of
innovation is</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Martin.</option><option value="B">B. the management team.</option><option value="C">C. the technology department.</option><option value="D">D. the employees.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is D: the employees.</h5><h5>As a result of Mia's
professional dedication, the company has implemented many of her ideas. This is an example of an
employee using __________ to achieve organizational goals.
A. reciprocity
C. excessive flattery
B. impression management
D. codependency
50. Which of the following is a disadvantage of a checking account:
A. Online transaction options
C. Overdraft protection
B. Direct payroll deposit
D. Account balance requirement
51. The yen, peso, and euro are types of
A. dollars.
B. bonds.

C. stock.
D. money.

52. When Brandon lost his job due to downsizing, the government sent him an unemployment check to help
him cover his living expenses until he found another job. What is Brandon's source of income?
A. Rebate
C. Refund
B. Transfer payment
D. Wage garnishment
53. Max set a financial goal of saving $2,000 in the next year. On a whim, Max saw a new video game that
he wanted, so instead of putting a portion of his paycheck in his savings account, he used that money to
purchase the game. What barrier is preventing Max from reaching his goal?
A. Overuse of credit
C. Unexpected needs
B. Impulsive spending
D. Loss of income
54. When reconciling your check register, it is important to __________ your balance.
A. subtract your earned interest from
C. subtract all applicable fees from
B. add your debit card transactions to
D. add ATM withdrawals to
55. It is important to review your credit report on a regular basis to
A. set your credit limit.
C. identify discriminatory practices.
B. change your credit score.
D. verify its accuracy.
56. Monitoring financial accounts and reading bank statements on a regular basis can help detect activities
associated with
A. personal hijacking.
C. identity theft.
B. property infringement.
D. securities fraud.
57. Individuals are most likely to require the services of a mortgage company when they want to
A. invest in the stock market.
C. purchase real estate.
B. acquire liability insurance.
D. earn interest on savings.

2011 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

7

58. While reviewing financial information, Troy noted that the company earned $245,956 in January,
$248,122 in February, and $252,878 in March. Which of the following most likely summarizes the
company's financial situation:
A. Cash flow continues to be tight.
B. Sales are steadily increasing.
C. Accounts receivable exceed accounts payable.
D. Capital assets are depreciating at a slower rate.
59. Accounting software applications facilitate a business's ability to efficiently track income and expenses,
manage inventory, and
A. plan work projects.
C. establish insurance policies.
B. process payroll.
D. organize media transcripts.
60. A primary reason governments regulate business accounting practices is to
A. balance the business's budget.
C. stabilize tax revenue.
B. certify aging accounts.
D. ensure consistent reporting.
61. Balancing the business's objective to make a profit with the interests of all the business's stakeholders is
a primary consideration related to the business's
A. financial ethics.
C. maintenance activities.
B. creative processes.
D. forecasting methods.
62. Instead of transferring the company's money to the company's bank account, Oscar placed it in an
offshore bank account that only he had access to. When the company's officers found out what Oscar
had been doing, they filed charges against him, and law enforcement officers arrested Oscar for
A. embezzlement.
C. insider trading.
B. securities fraud.
D. espionage.
63. What is the advantage of using a rolling or continuous budget?
A. It eliminates the need for the business to develop a master budget.
B. It requires managers to demonstrate the need for every expense at one time.
C. It provides managers with the ability to accurately forecast unexpected expenses.
D. It encourages managers to assess activities and adjust figures more frequently.
64. Is it unethical for a manager to promote an employee who is also the manager's friend?
A. Yes, it is appropriate to promote a friend.
B. No, if the employee is not the same gender as the manager.
C. No, if the appropriate procedures are followed, and the employee is the most qualified candidate.
D. Yes, other employees will file discrimination claims, which will damage the company's reputation.
65. A well-prepared new employee orientation program should
A. verify the new employees' job qualifications.
B. outline the employer's specific financial goals.
C. communicate the employer's philosophy and expectations.
D. set aside time to negotiate the employees' salary requirements.
66. What type of buying behavior involves low customer involvement, significant brand awareness, and a
desire for change?
A. Variety-seeking
C. Status-oriented
B. Risk-taking
D. Brand-insisted
67. Employees can help their employers meet important deadlines by
A. resolving complaints.
C. improving profitability.
B. staying on task.
D. following trends.

2011 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

8

68. The following statement appeared in an online journal article written by Dr. Lydia Garrett:
“Dr. Sanderson has limited expertise in the area of biophysics, and I do not believe that he has
conducted enough research to support his theory.”
This is an example of
A. hearsay.
B. supporting evidence.

C. an opinion.
D. a fact.

69. Eric is viewing the results for an online search about the current economic situation in North America.
Which of the following is going to provide Eric with the most reliable information:
A. A six-page report written in 2009 by a Canadore College student for an economics class
B. An article written by a Harvard economics professor that was published in a business magazine
last month
C. An excerpt from a second-edition high-school economics textbook that was published in the fall
of 2005
D. A two-day-old video clip of a CNN interview with a 16-year-old entrepreneur from Sheboygan,
Wisconsin
70. Due to obsolescence, the format in which a business stores its information must often be
A. archived.
C. processed.
B. updated.
D. summarized.
71. The Lee Company must pay a settlement to Smith Industries because Lee used Smith's logo on its web
site and other printed materials without Smith's permission. The Lee Company has violated
A. trade-secret regulations.
C. patent-registration codes.
B. intellectual property laws.
D. local ordinances.
72. Important functions of a business's information system are to help it to __________ its important facts
and data.
A. organize and store
C. analyze and instruct
B. mediate and retrieve
D. duplicate and renew
73. William is thinking about getting a new smartphone, so he logged on a well known web site to read
others' opinions and experiences with different types of smartphones that are currently on the market.
William is reading Internet product reviews to
A. reaffirm his recent purchasing selection.
B. compare the prices of smartphones from various online stores.
C. determine which company has the best phone plan.
D. make an informed buying decision.
74. What types of applications help computer users manage their appointments and work activities through
e-mail software programs?
A. Address book, task, and workbook features
B. Calendar, address book, and view mechanisms
C. Contact, workbook, and view settings
D. Task, calendar, and contact functions
75. A business wants to send a mailing to all customers who have ordered at least $2,500 in merchandise in
the past year. To obtain the appropriate list of customers, the business should set the query by
A. sales dollars and dates.
C. product code and zip code.
B. last name and account number.
D. credit rating and location.
76. Haley has completed a new page to add to her employer's existing web site. What does she need to do
next?
A. Upload the page to the web server
C. Select an Internet service provider
B. Obtain a domain name
D. Add the page to the internal network

2011 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

9

77. When an existing customer's contact information changes, what should a company do?
A. Update the customer's record in the company database
B. Create a new record that contains the customer's changes
C. Add the customer's record in the employee directory
D. Enter the customer's contact information in a new database
78. During the busy tourist season, a coastal surf shop sold 398 beach balls in June, 924 beach balls in July,
and 537 beach balls in August. This information reveals that
A. the supply of beach balls declined in June by four percent.
B. more tourists purchased beach balls in July than June and August combined.
C. beach-ball production rates increased in August.
D. the demand for beach balls peaked during July.
79. Which of the following is unethical behavior in the operations function of business:
A. Using negotiating techniques to encourage a vendor to make concessions
B. Sharing a vendor's competitive bid information with another supplier
C. Developing scorecards to evaluate suppliers' performance levels
D. Setting deadlines for vendors to submit their bids
80. WTZ Manufacturing acquired new equipment that performs production activities that were previously
carried out by employees. This is an example of
A. ergonomics.
C. outsourcing.
B. customization.
D. automation.
81. Trevor works with dangerous equipment on a busy production line. Several months ago, he noticed that
one of the machines was not operating correctly, so he notified his supervisor about the problem. Since
then, Trevor has reminded his supervisor about the issue several times and has reported the problem to
the vice president of operations. Still, the machine has not been fixed. Should Trevor report the
noncompliance to the government?
A. No. Trevor's nagging is causing friction with his company's management staff, and he could lose
his job for stirring up trouble.
B. Yes. Before he reports the noncompliance, Trevor should tell his supervisor what he plans to do,
and use the information as leverage to get a promotion.
C. No. Trevor has done all he can to resolve the issue and it is up to management to schedule the
repair.
D. Yes. Management is behaving irresponsibly because the equipment may injure the workers who
use it.
82. What is needed to effectively handle situations such as fire, injury, bomb threats, and robbery that might
occur on the business's property?
A. An emergency plan
C. A surveillance system
B. An operating strategy
D. An evacuation map
83. Lily is the last employee to leave the building today. To reduce the risk of theft, Lily should __________
before she _________.
A. turn off the lights, sets the security alarm
B. set the security alarm, locks the doors
C. turn on the surveillance camera, adjusts the thermostat
D. adjust the thermostat, turns on the surveillance camera
84. Why might a business obtain a trademark for its intellectual property?
A. To protect the integrity of the business's logo
B. To prevent the publication of the business's written work
C. To keep competitors from using the business's manufacturing processes
D. To stop the unauthorized use of the business's inventions

2011 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

10

85. Which of the following is an activity performed during the planning phase of a project:
A. Schedule implementation (execution)
C. Concept identification
B. Budget development
D. Feasibility analysis
86. Tatiana is a project manager who is ready to close a project, and has scheduled a “lessons learned”
meeting with the project team. What will Tatiana most likely include on her meeting agenda?
A. The definition of the project's purpose
B. Discussion of specific challenges encountered
C. Explanation of the stakeholders' expectations
D. The distribution of project resources allocated
87. As owner of the Zoom Company, Trinda will need to manage the bidding process between possible
suppliers. She created the following chart as part of the process. Which factor does Zoom Scooter Co.
feel is the most important when evaluating suppliers?
Supplier: Ace Tires, Inc.
Category
Score (1-5)
Cost structure
3
On-time delivery
4
Product quality
5
Technological
5
capability

A. Product quality
B. On-time delivery

Weight
0.4
0.2
0.3
0.1

C. Cost structure
D. Technological capability

88. What is an important consideration for many large businesses when they are selecting vendors?
A. Segmentation method
C. Compensation policies
B. Technological capabilities
D. Asset depreciation
89. An automobile company conducted systematic accident simulations by crashing their cars and trucks into
cement walls at various speeds. Results of the simulation were used to evaluate how well the vehicles
held up and to determine weaknesses in the vehicles' structure. What quality control method is the
company using?
A. Material classification
C. Product testing
B. Random inspection
D. Commodities sampling
90. Which of the following expenses should Charlene categorize as a fixed cost:
A. Cost of goods sold
C. Rent
B. Delivery charges
D. Commissions
91. Martin had a problem obtaining information that he needed to perform his job. One day, Martin had an
idea that he thought would resolve his problem, and discussed the idea with his manager. Martin's
manager liked the idea and set up a meeting with the company's IT department staff members to discuss
it in further detail. During the meeting, the participants determined that it was feasible to expand and
implement this idea over a period of several months in a way that would benefit Martin, as well as other
departments, which would increase the company's overall efficiency. In this situation, the source of
innovation is
A. Martin.
C. the technology department.
B. the management team.
D. the employees.
92. You should obtain maximum input from others when you are making decisions that
A. are routine in nature.
C. require logical thinking.
B. affect others significantly.
D. involve limited consideration.

2011 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

11

93. William was having a hard time coming up with ideas to solve a problem that he was having at work. He
decided to write down some things that he could do to make the problem worse. He then reviewed each
negative statement and thought of ways to improve the situation. What problem-solving technique was
William using?
A. Appreciative inquiry
C. Reverse brainstorming
B. Mind mapping
D. Attribute listing
94. Because Valerie has the ability to look at issues and problems without bias, she often comes up with very
innovative ideas and solutions. What trait of creativity does Valerie possess?
A. Curiosity
C. Independence
B. Open-mindedness
D. Self-awareness
95. Because Alexa enjoys working with children and has a knack for developing fun activities that help them
understand puzzles and numerical formulas, she might consider a career as a
A. math teacher.
C. computer programmer.
B. graphic designer.
D. financial planner.
96. As a new business owner, Thomas is willing to work long hours, watch his spending, and sacrifice his
social life to focus on building his clientele. What entrepreneurial trait is Thomas exhibiting?
A. Objectivity
C. Organization
B. Humility
D. Determination
97. What is the first step in completing a job application?
A. Listing personal references
B. Completing the form's work history section
C. Identifying questions that do not apply to the applicant
D. Reading the entire form to follow directions
98. An effective way to close a job interview follow-up letter is to
A. reinforce your interest in the position.
B. communicate your minimum salary requirements.
C. acknowledge your desire to be promoted.
D. ask the interviewer to read your résumé.
99. Last week, Marcus attended a friend's birthday party and talked with Lynnette, a manager with the
Trendall and Young accounting firm. Marcus mentioned that he is a technology major and will be looking
for a job after he graduates in June. Lynnette gave Marcus her business card, and told him that her firm
might be hiring during the summer months. The interaction between Marcus and Lynnette is an example
of
A. informal interviewing.
C. professional networking.
B. social etiquette.
D. community resourcing.
100. Which of the following is an example of career advancement within a company:
A. Audrey was hired as a sales coordinator, was promoted to salesperson, and is now sales
manager of CTK Corporation.
B. After RQW Technologies offered Dylan a similar management position and 15% salary increase,
he resigned as systems manager with TechFi.com.
C. When James reached his 25-year anniversary as production manager of Whitman
Manufacturing, he decided to retire.
D. Julia accepted a marketing manager position with GZA International because she became bored
with her advertising coordinator position with Drexall Publishing.

2011 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM—KEY

12

1. B
Breached the duty of care. The duty of care is the basic principle that expects all individuals and
businesses to exhibit socially responsible behavior by using caution to prevent harm and by watching out
for one another. A tort is a private wrongdoing that potentially harms another person or entity. If a
business or one of its employees breaches the duty of care, the business may be held liable for the tort.
However, the plaintiff must have grounds or proof that establishes that the business or its employee
(defendant) has committed a wrongful act, thereby breaching the duty of care. Intentional damage and
conspiring with a competitor (collusion) are types of torts. The doctrine of sovereign immunity is the
universally accepted principle that each nation has the right to manage its own government and develop
its own laws.
</h5></div><h5 id='q92'>92. You should obtain maximum input from others when you are making decisions that</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. are routine in nature.</option><option value="B">B. affect others significantly.</option><option value="C">C. require logical thinking.</option><option value="D">D. involve limited consideration.

</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is B: affect others significantly.</h5><h5>Depending on the situation, you might want to obtain input from others before
you make a decision. When a decision affects others in a significant way, such as changing work
responsibilities of department members, it is important to get as much input as needed to make a sound
decision. Generally, routine decisions involve determining what to have for breakfast or what shirt to
wear—these types of decisions require little input, if any, from others. All types of decisions—routine,
limited, and extensive—may or may not require logical thinking. Decisions that require limited
consideration usually require a moderate amount of input from others. For example, if an employee is
deciding which of three layouts to use in a magazine ad, s/he might ask one or two qualified coworkers
for their opinions.
</h5></div><h5 id='q93'>93. William was having a hard time coming up with ideas to solve a problem that he was having at work. He
decided to write down some things that he could do to make the problem worse. He then reviewed each
negative statement and thought of ways to improve the situation. What problem-solving technique was
William using?</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Appreciative inquiry</option><option value="B">B. Mind mapping</option><option value="C">C. Reverse brainstorming</option><option value="D">D. Attribute listing</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is C: Reverse brainstorming</h5><h5>When you are having a hard time solving a problem, you might want to try to look
at your problem in different ways. The reverse brainstorming method involves finding ways to make the
problem worse. After writing down negative statements, you try to generate ideas and possible solutions
for your worst-case scenario. By looking at the issue in a different way, you may come up with a unique
way to solve the problem. Mind mapping is a problem-solving method that involves drawing out your
problem on a large sheet of paper. Appreciative inquiry is a problem-solving method that requires you to
think positively about the problem. Attribute listing involves listing characteristics of something and then
combining some or all of those attributes into something else.
</h5></div><h5 id='q94'>94. Because Valerie has the ability to look at issues and problems without bias, she often comes up with very
innovative ideas and solutions. What trait of creativity does Valerie possess?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Curiosity</option><option value="B">B. Open-mindedness</option><option value="C">C. Independence</option><option value="D">D. Self-awareness</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is B: Open-mindedness</h5><h5>When you have an open mind, you don't limit yourself to rigid standards and
opinions—you allow room for ideas to flow and grow, which is the foundation for creativity. Curiosity is a
creative trait that involves a desire to question and learn things. Independence is the ability to think and
act on your own and complete tasks without the direction of others. Self-awareness is the ability to
recognize and know your own emotions.
</h5></div><h5 id='q95'>95. Because Alexa enjoys working with children and has a knack for developing fun activities that help them
understand puzzles and numerical formulas, she might consider a career as a</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. math teacher.</option><option value="B">B. graphic designer.</option><option value="C">C. computer programmer.</option><option value="D">D. financial planner.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is A: math teacher.</h5><h5>Individuals must consider many personal factors when deciding which career to pursue,
including their interests, aptitudes, and personality traits. When determining the career in which she will
be most happy and successful, Alexa must consider all of these factors. Because she enjoys working
with children and has an aptitude for helping them understand puzzles and numerical formulas, she might
consider a career as a math teacher. Graphic designers, computer programmers, and financial planners
should have an aptitude for mathematical concepts, but these careers do not involve working with
children.
</h5></div><h5 id='q96'>96. As a new business owner, Thomas is willing to work long hours, watch his spending, and sacrifice his
social life to focus on building his clientele. What entrepreneurial trait is Thomas exhibiting?</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Objectivity</option><option value="B">B. Humility</option><option value="C">C. Organization</option><option value="D">D. Determination</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is D: Determination</h5><h5>When entrepreneurs are willing to do what it takes to get their businesses up and running,
they are determined to make their ventures successful. Determination involves following through with
certain actions that may be difficult or unpleasant—such as the willingness to cut back on spending and a
willingness to work long hours—to achieve a desired result. Humility is a lack of pride. Organization
involves carrying out activities in systematic ways. Objectivity is open-mindedness.
</h5></div><h5 id='q97'>97. What is the first step in completing a job application?</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Listing personal references</option><option value="B">B. Completing the form's work history section</option><option value="C">C. Identifying questions that do not apply to the applicant</option><option value="D">D. Reading the entire form to follow directions</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is D: Reading the entire form to follow directions</h5><h5>To make a good impression, it is important to complete the
job application accurately and neatly. By reviewing the form, the applicant has the opportunity to read the
directions and scan the format. This step may prevent the applicant from placing information on the
wrong line or in the wrong section. Application forms vary by company, so the order in which the work
history, educational background, or references are completed is not important. Applicants fill out the
questions that do apply to them, and write “not applicable” for the questions that do not apply to them, as
they get to the questions rather than completing or identifying them initially.
</h5></div><h5 id='q98'>98. An effective way to close a job interview follow-up letter is to</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. reinforce your interest in the position.</option><option value="B">B. communicate your minimum salary requirements.</option><option value="C">C. acknowledge your desire to be promoted.</option><option value="D">D. ask the interviewer to read your résumé.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is A: reinforce your interest in the position.</h5><h5>It is a courteous gesture to write a follow-up letter to thank the
interviewer for the opportunity to discuss the job. The letter may include information that you may have
forgotten to share with the interviewer. Letting the interviewer know that you are interested in the position
when closing the letter can help reinforce a positive image and help the interviewer to remember you.
Communicating your minimum salary requirements and your desire for promotion are not appropriate
topics for a follow-up letter and may hinder job offers. Interviewers read résumés before setting up
interviews with job applicants.
</h5></div><h5 id='q99'>99. Last week, Marcus attended a friend's birthday party and talked with Lynnette, a manager with the
Trendall and Young accounting firm. Marcus mentioned that he is a technology major and will be looking
for a job after he graduates in June. Lynnette gave Marcus her business card, and told him that her firm
might be hiring during the summer months. The interaction between Marcus and Lynnette is an example
of</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. informal interviewing.</option><option value="B">B. social etiquette.</option><option value="C">C. professional networking.</option><option value="D">D. community resourcing.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is C: professional networking.</h5><h5>Networking is the process of exchanging information with others for the purpose
of professional or business development and/or advancement. In the example, Marcus took advantage of
a social situation to discuss his professional development or needs with Lynette. The situation presented
is not an example of etiquette (exhibiting manners), interviewing, or community resourcing.
</h5></div><h5 id='q100'>100. A company places a confidentially statement at the bottom of its web site's home page that states:
"This company will not release your information unless you direct us to do so, or unless we are legally
obligated to provide certain information to authorized agencies."
What is the significance of the statement?</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. It expresses the company's vision for the future.</option><option value="B">B. It communicates the company's commitment to protect its customers' privacy.</option><option value="C">C. It describes the company's incentive and loyalty program.</option><option value="D">D. It outlines the company's policies regarding public information.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is B: It communicates the company's commitment to protect its customers' privacy.</h5><h5>An ethical company
implements strategies to protect its customers' privacy. Communicating how the company will protect its
customers' privacy helps to build the customers' trust. If customers feel that the company respects their
privacy, they are more likely to trust the company and become loyal customers. Loyal customers provide
the company with repeat sales and long-term relationships. A company's vision statement expresses its
desire for the future. The statement on the company's web site does not describe public information
policies or specific details about its incentive and loyalty program.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Principles/Principles_3_Whole_Master.js"></script></html>