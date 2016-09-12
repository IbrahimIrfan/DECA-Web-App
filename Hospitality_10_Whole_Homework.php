<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Hospitality Exam 10</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Janelle owns a fast-food restaurant that is part of a larger chain of restaurants. She paid an initial fee to
the owner of the chain when she opened the restaurant. She also has to pay a royalty fee to the parent
company based on a percentage of her profits. Janelle is a</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. franchisor.</option><option value="B">B. franchisee.</option><option value="C">C. licensor.</option><option value="D">D. licensee.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is B: franchisee.</h5><h5>Franchising is a method of distributing recognized goods and services through a legal
agreement between two parties. The franchisee (in this case, Janelle) acquires the rights to operate the
business using the parent company's name. That parent company is known as the franchisor. For
someone who wants to be a business owner, purchasing a franchise is often a desirable ownership
option because the product has an established brand with a solid reputation. Licensing refers to an
owner's authorization or permission for another entity to use trademarked, copyrighted, or patented
material for a specific activity, during a specific time period, for the profit of both parties. The licensor is
the owner of the material, and the licensee is the buyer.
</h5></div><h5 id='q2'>2. David checked his luggage with a SkyHigh airline attendant before boarding a plane that was traveling
from the Atlanta airport to the Denver airport. When he arrived at the Denver airport, David discovered
that his luggage was lost. Who is liable for David's loss?</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. The Denver airport</option><option value="B">B. The Atlanta airport</option><option value="C">C. The SkyHigh Airline</option><option value="D">D. The airline attendant</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is C: The SkyHigh Airline</h5><h5>When David checked his luggage with the SkyHigh airline attendant before boarding
the airplane, the airline accepted responsibility for the safety of his belongings. Therefore, the airline is
liable for David's loss. Typically, passengers must file claims with the airlines to obtain compensation for
their losses. Under most circumstances, employers (SkyHigh Airline) are responsible for their employees'
actions, and by law, are liable for their on-the-job conduct. In addition, there is not enough information
provided to determine if the attendant was actually responsible for the loss. The airports are not liable for
the airlines' losses.
</h5></div><h5 id='q3'>3. What type of business is most likely to improve its efficiency by installing an electronic data interchange
(EDI) system?</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. A bed-and-breakfast inn with two guest rooms</option><option value="B">B. A large resort with seven restaurants</option><option value="C">C. A charter fishing boat operator</option><option value="D">D. An independent taxicab driver</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: A large resort with seven restaurants</h5><h5>A large resort with multiple restaurants is likely to use many
suppliers. A hospitality business that purchases high volumes of goods and services from several
suppliers may increase its efficiency by using an electronic data interchange (EDI) system. An EDI
system automatically transmits the business's sales information to its suppliers via computer, which
allows the suppliers to process the business's orders quickly. The EDI system helps reduce telephone
calls and paperwork and helps businesses manage their inventories efficiently. A small bed-andbreakfast inn, a charter fishing boat operator, and an independent taxicab driver are less likely to
purchase high volumes of goods and services, so an EDI system is less likely to improve their efficiency
levels.
</h5></div><h5 id='q4'>4. To achieve cooperation in the distribution channel, channel captains should</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. minimize communication efforts.</option><option value="B">B. improve performance standards.</option><option value="C">C. treat channel members fairly.</option><option value="D">D. use autocratic leadership methods.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is C: treat channel members fairly.</h5><h5>Channel captains lead and manage the channel members or
intermediaries in the distribution channel. When channel captains treat their channel members fairly,
there is usually less channel conflict and more cooperation with in the distribution channel. This, in turn,
helps all channel members achieve their common goal—satisfying customers. Improving performance
standards may not lead to cooperation among channel members in the distribution channel. Minimizing
communication and using autocratic leadership methods may cause channel conflict.
</h5></div><h5 id='q5'>5. A month ago, Carmen volunteered to bring cookies to her school's bake sale. She waited until the
morning of the bake sale to bake the cookies, and now she has to get them done as quickly as she can.
She tries a cookie when it comes out of the oven, and it tastes terrible. Carmen looks back at the recipe
and realizes she left out several key ingredients because she was in such a hurry. Which of these steps
for following written instructions did Carmen ignore?</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Accept responsibility</option><option value="B">B. Don't rush</option><option value="C">C. Know the end result</option><option value="D">D. Go in order</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is B: Don't rush</h5><h5>Remember that reading and following directions is not a race! It's important to take your time
and follow the steps provided. Even if you're in a hurry, like Carmen, rushing through directions can
actually end up taking more time if you have to spend time fixing your mistakes. It's important to accept
responsibility, know the end result, and go in order, but Carmen did not ignore these steps in this
example.
</h5></div><h5 id='q6'>6. When preparing for a speech, it's most important to</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. design visual aids.</option><option value="B">B. practice.
</option><option value="C">C. plan your appearance.</option><option value="D">D. write note cards.
</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is B: practice.
</h5><h5>Explanation not available</h5></div><h5 id='q7'>7. Which of the following should you be sure to do when taking notes:</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Write as legibly as possible.</option><option value="B">B. Use correct spelling and grammar.</option><option value="C">C. Write in complete sentences.</option><option value="D">D. Try to write down everything the teacher says.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is A: Write as legibly as possible.</h5><h5>Even though you may be writing your notes quickly, it's important to write as
neatly as you can. After all, your notes won't be very helpful if you can't even read them later! You
shouldn't worry about using correct spelling and grammar when taking notes. It's more important to focus
on content. You also don't need to write in complete sentences. This will only slow down your notetaking. It's impossible to write down everything the teacher says; instead, just try to capture the main
points and important information.
</h5></div><h5 id='q8'>8. You're writing a persuasive letter that you hope will convince people to buy your product. You should be
sure your letter</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. identifies your central selling point.</option><option value="B">B. is as subjective as possible.</option><option value="C">C. uses general words and passive voice.</option><option value="D">D. uses exaggeration to grab attention.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is A: identifies your central selling point.</h5><h5>Your central selling point is what makes you different from your
competitors. What makes your product stand out? How are you different from other businesses? You
want your readers to know the advantages of your product—that's why you're sending out a persuasive
letter in the first place! It's important to make your persuasive letter as objective as possible. Of course,
you want your reader to know how great your product is, but you don't want him/her to think that you're
biased. If s/he does, s/he may dismiss your letter. It's important to use specific words and active voice.
Specific facts show the reader exactly what your product can do, while active voice makes your letter
stand out and seem more urgent. While you want your letter to grab the reader's attention, it's important
to stay honest. Don't exaggerate just to seem more exciting. Your reader will likely be able to tell, and it
may turn her/him off your product.
</h5></div><h5 id='q9'>9. Pamela, a manager, isn't happy with her employee Rob's performance on a recent project. She likes Rob
and generally thinks he's a good employee, but she needs to communicate with him to let him know how
he can do better next time. She knows that Rob can be sensitive, and she wants to make sure her
message isn't misconstrued. Which channel of communication should Pamela choose?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. E-mail</option><option value="B">B. Face-to-face</option><option value="C">C. Letter</option><option value="D">D. Phone call
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is B: Face-to-face</h5><h5>It's important to select the right communication channel when you have to deliver an
important message. For Pamela, the best choice is face-to-face communication. If she communicates in
person with Rob, he'll be able to hear her tone of voice, watch her facial expressions, and see her hand
gestures. He's less likely to interpret her words the wrong way, and even if he does, Pamela will be able
to clear up any misunderstandings immediately. While e-mail is a convenient communication channel
that's fast and efficient, it doesn't translate Pamela's nonverbal cues. Since tone can often be hard to
indicate in an e-mail, the chance that Rob will be upset is much higher. And if he is upset, Pamela will
have no way of knowing or fixing the problem, since she won't be in front of him when he receives her
message. A letter has many of the same problems as e-mail. Generally, a letter should be sent for
special occasions, not just for ordinary conversations about job performance. A phone call, while better
than an e-mail or letter, is still not ideal. Rob would be able to hear the tone of Pamela's voice, but he
would not see any gestures or facial expressions she may make. Also, Pamela wouldn't be able to
observe any of Rob's nonverbal cues, so she may not know if he's upset by their conversation.
</h5></div><h5 id='q10'>10. Which is a better customer for a company to have: one who complains about poor service or a faulty
product, or one who doesn't?</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. One who complains because s/he gives the company an opportunity to fix its mistakes.</option><option value="B">B. One who complains because then the company has an opportunity to explain why the customer
is wrong.</option><option value="C">C. One who doesn't complain because fewer complaints cost the company less money.</option><option value="D">D. One who doesn't complain because it means s/he is satisfied.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is A: One who complains because s/he gives the company an opportunity to fix its mistakes.</h5><h5>Only a small
number of dissatisfied customers actually take the time to complain to a business. Instead, they typically
tell everyone they know about their bad experience, which can mean a lot of negative publicity for a
company that didn't even get a chance to correct the problem. When a customer complains, s/he gives a
business the opportunity to fix its mistakes. If a company handles the situation right, it can create a loyal
customer. A company should never attempt to tell a customer s/he is wrong, even if s/he is. Instead, the
person handling the complaint should listen and empathize with the customer. Fewer customer
complaints may save a company time and frustration in the short term, but in the long term they can end
up costing money. When customers complain about products or services, they alert a company to
possible problems. A company can then fix those problems early on and avoid expensive fixes down the
road. If a customer doesn't complain, it doesn't necessarily mean that s/he is satisfied. S/He may just not
tell the business that s/he is unsatisfied, which, as mentioned earlier, can actually be much worse than a
complaint.
</h5></div><h5 id='q11'>11. Save More Grocery is seeking to maximize the value of their customers by creating long-term
relationships and strategies to increase business profits. The business created a smartphone app that
will be scanned every time a customer purchases items from Save More. The application provides
demographical information, customer preferences, and purchase history. The app is a form of
__________ management.</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. customer relationship</option><option value="B">B. business process</option><option value="C">C. human resource</option><option value="D">D. first-line</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: customer relationship</h5><h5>Customer Relationship Management (CRM) uses strategies, processes, and
policies to build, maintain, and maximize the long-term value of customer relationships. Goals of CRM
include developing a competitive advantage and increasing business profits. Business process
management is a business strategy that stresses technology, innovation, and flexibility to align an
organization's objectives and activities with customer needs. Human resource management is the
process of planning, staffing, leading, and organizing the employees of a business. First-line
management includes supervisors who work directly with the employees who carry out the business's
routine work.
</h5></div><h5 id='q12'>12. Which of the following is an example of a capital good:</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. A truck driver</option><option value="B">B. Iron ore</option><option value="C">C. A delivery truck</option><option value="D">D. Weather conditions</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: A delivery truck</h5><h5>A capital good is any manufactured or constructed item that is used to produce goods
and services. While natural resources are provided by nature, capital goods are created by people.
Capital goods can come in many forms, such as equipment, machinery, and tools. Delivery trucks are
capital goods because they enable producers to operate businesses and make products available to
consumers. Iron ore and weather conditions are both considered natural resources. A natural resource is
any resource that is found in nature and used to produce goods and services. Human resources are
people who are valued for the work they do to produce goods and services. This includes truck drivers,
who are in charge of delivering raw materials and/or finished goods.
</h5></div><h5 id='q13'>13. When a company experiences a change in human-resources management, it will also experience a
change in</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. profits.</option><option value="B">B. financial analysis.</option><option value="C">C. name.</option><option value="D">D. market share.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is B: financial analysis.</h5><h5>When a company experiences a change in human-resources management, it will also
experience a change in financial analysis. This is because the business activities are interrelated, and
one activity experiences a change, the other activities will change or adjust as well. For example, if a
company hires more employees (a part of human-resources management), it will have to adjust the
budget to be able to pay them (a part of financial analysis). A change in human-resources management
would not necessarily cause a change in profits, the business's name, or market share.
</h5></div><h5 id='q14'>14. Which of the following is most likely to have a negative impact on a beach destination's economy:</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Hotel and restaurant construction</option><option value="B">B. Occasional airline delays</option><option value="C">C. Fluctuations in gasoline prices</option><option value="D">D. Floods and severe storm damage</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is D: Floods and severe storm damage</h5><h5>Floods and storms can cause damage that shuts down lodging
facilities, restaurants, tourist attractions, airports, and roads. When businesses are not operating and
generating income, the local economy is negatively impacted. Occasional airline delays and minor
fluctuations in gasoline prices are normal, so these factors do not typically negatively affect a
community's economic health. Hotel and restaurant construction indicates that the local economy is
growing.
</h5></div><h5 id='q15'>15. Dmitri owns a small business on the coast, and there's always a chance his property could be damaged
by a hurricane. How could this risk be described?</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. Pure and insurable</option><option value="B">B. Pure and uninsurable</option><option value="C">C. Speculative and insurable</option><option value="D">D. Speculative and uninsurable</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is A: Pure and insurable</h5><h5>A pure risk is a risk with two possibilities—loss or no loss. This describes the loss
Dmitri faces from a hurricane. His business may be damaged, or it may not, but there's no chance he will
gain something from a hurricane. Pure risks are considered insurable risks, meaning that businesses are
able to take out insurance policies against them. Speculative risks bring the possibility of loss, no change,
or gain. This category includes strategic and financial risks. Since these risks are unpredictable, they're
uninsurable.
</h5></div><h5 id='q16'>16. Jamie's manager put her in charge of a new project. She'll have to do lots of research, write reports, and
prepare presentations. What is the depth and scope of Jamie's job?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. High depth, high scope</option><option value="B">B. Low depth, low scope</option><option value="C">C. High depth, low scope</option><option value="D">D. Low depth, high scope</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is A: High depth, high scope</h5><h5>Scope is the number of different operations you do on the job and the frequency
with which you do them. The lower your task level, the lower the scope. Putting doors on cars in an
assembly line, for example, is low scope, since you're performing one task over and over again. Because
Jamie is doing a variety of tasks, her job is high scope. Depth is the amount of control you have over the
tasks that you do. If your job has low depth, that means there are strict guidelines you must follow, and
you have very few decisions to make. Since Jamie is in charge of her project, she'll be making lots of
decisions. This means her job is high scope.
</h5></div><h5 id='q17'>17. What two indexes combine to form the consumer confidence index?</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Present situation and economics</option><option value="B">B. Economics and past situation</option><option value="C">C. Past situation and expectations</option><option value="D">D. Present situation and expectations</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is D: Present situation and expectations</h5><h5>The Consumer Confidence Index (CCI) details American consumer
attitudes about current and future economic conditions. Data is available by age, income, and region. The
Consumer Confidence Index is made up of the Present Situation Index (40%) and the Expectations Index
(60%). The Present Situation Index is based on how consumers rate present business conditions and
available jobs in their area. The Expectations Index is derived from predictions for business conditions
and job availability in six months. Economics and past situation are not indices that are a part of the
Consumer Confidence Index.
</h5></div><h5 id='q18'>18. Because changes are always occurring in the hospitality industry, hotel managers must be</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. aggressive.</option><option value="B">B. empathetic.</option><option value="C">C. sincere.</option><option value="D">D. adaptable.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is D: adaptable.</h5><h5>Being adaptable is the ability to accept and deal with change effectively. Successful
managers are not only adaptable, but they help employees, vendors, and customers adjust to changes,
too. Empathetic people have the ability to relate to the feelings, thoughts, and experiences of others.
Sincere people are genuine in nature. Expressing empathy and sincerity helps build positive
relationships, but these traits do not always relate to adapting to change. Aggressive behavior is conduct
based on a willingness to ignore the rights of others and to take advantage of them to achieve personal
goals.
</h5></div><h5 id='q19'>19. Which of the following best describes an optimist:</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Someone who focuses on what's good</option><option value="B">B. Someone who focuses on what's bad</option><option value="C">C. A person who sees a partially-filled glass of water as “half empty”</option><option value="D">D. A person who budgets his/her time wisely

2013 HS ICDC

HOSPITALITY AND TOURISM CLUSTER EXAM

3
</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is A: Someone who focuses on what's good</h5><h5>If someone focuses on what's good, that person is an optimist.
Optimists can also be described as people who see the glass as "half full" or who look on the bright side
of things. Pessimists, meanwhile, focus on what's bad, see a partially-filled glass of water as "half empty,"
and look on the dark side of things. Budgeting your time wisely doesn't necessarily mean that you are an
optimist.
</h5></div><h5 id='q20'>20. Molly offers to take her new coworker out to lunch. She remembers what it was like when she was a new
employee two years ago, and she wants to help her new coworker feel comfortable and welcome. What
trait is Molly showing towards her new coworker?</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. Tact</option><option value="B">B. Empathy</option><option value="C">C. Sympathy</option><option value="D">D. Judgment</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is B: Empathy</h5><h5>Empathy is the ability to put yourself in another person's place or to see a situation from
another person's point of view. Molly can understand how her coworker feels because she was in the
same situation two years ago—that's empathy. Tact is the ability to do or say the right thing in any
circumstances. When you speak tactfully, you consider your words carefully before saying them. It's
important that Molly speak tactfully to her new coworker, but that's not what she's doing in this example.
Sympathy is the ability to recognize another person's feelings. If Molly simply felt sorry for her coworker's
situation, she would be sympathetic. However, Molly actually understands what it's like to be in her
coworker's position, so she's being empathetic. Molly is not judging her new coworker—being empathetic
means not being judgmental.
</h5></div><h5 id='q21'>21. When confronting a conflict, it's important to</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. ask for feedback and listen.</option><option value="B">B. focus on your overall feelings about the other person.</option><option value="C">C. avoid apologizing.</option><option value="D">D. use “you” statements whenever possible.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is A: ask for feedback and listen.</h5><h5>It's very important to not only ask the other person for their feedback but to
listen to what they have to say, as well. You can then verify your understanding by summarizing the other
person's comments or by asking additional questions. You don't want to focus on your overall feelings
about the other person—instead, you should focus on your feelings about the person's behavior. You
should apologize if you've yelled at or insulted a coworker. Avoid using "you" statements, as they tend to
place blame and fault on the other person. Instead, try to use "I" statements, which convey your beliefs,
perceptions, and feelings.
</h5></div><h5 id='q22'>22. What's the first thing you should do to motivate team members?</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Point out shortcomings so that they know where to improve.</option><option value="B">B. Give team members fun rewards to look forward to.</option><option value="C">C. Let team members be creative and try new ideas.</option><option value="D">D. Set a good example by being positive and confident.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is D: Set a good example by being positive and confident.</h5><h5>The first step in motivating your team is having a
positive attitude and setting a good example. Try to remain energetic and confident and look for the
positives in every situation. If you're negative, complain about coworkers, or talk about how you'll never
get your project done on time, your team will pick up on your attitude. It's important to give team
members rewards to look forward to and to let them try new ideas, but your own attitude has to come
first. You can't motivate others unless you've motivated yourself. Although it is important to let your team
members know about areas that need improvement, it's important not to do that right away. If you start
out with something negative, team members may become discouraged before they even begin.
</h5></div><h5 id='q23'>23. Miguel is nervous about taking calculus because he heard the teacher is difficult. However, Miguel
believes in himself, and he's sure he'll do well in the class if he works hard and does his best. Which
characteristic of adaptability does Miguel show?</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. Empathy</option><option value="B">B. Confidence</option><option value="C">C. Objectivity</option><option value="D">D. Respect</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is B: Confidence</h5><h5>Everyone reacts to new situations differently, but adaptable people consistently exhibit
certain attitudes or behavior when stuff happens—big and small. When Miguel expresses a positive belief
in his ability to handle a new situation, he is displaying confidence. This attitude will help him adapt to his
challenging calculus class. Empathy, objectivity, and respect are also important characteristics of
adaptable people, but Miguel isn't showing those traits in this particular example.
</h5></div><h5 id='q24'>24. Darnell is a creative person who enjoys having a lot of freedom at work. He likes to work independently,
and he doesn't need much guidance or direction. Darnell would work best under a _________ manager.</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. cooperative</option><option value="B">B. democratic</option><option value="C">C. authoritarian</option><option value="D">D. laissez-faire</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is D: laissez-faire</h5><h5>A supervisor or manager who takes a “hands-off” approach to managing employees uses
a laissez-faire style. This involves providing only general guidance, permitting employees to function
independently, and encouraging creativity and initiative. This is a good match for Darnell, since he likes
to work independently and doesn't need much guidance. Democratic managers exercise only a moderate
amount of control over their employees. They seek input from employees, encourage employees to
participate in planning and decision-making, and share authority. This style of management is also
referred to as the participative-management style. Authoritarian managers are very “in-charge” people
who prefer to exercise a high degree of control over their employees. These managers offer very little
freedom or independence. “Cooperative” is not a term typically used to describe a management style.
</h5></div><h5 id='q25'>25. Morgan received an e-mail that claimed to be from her credit-card company. The e-mail said that her
account would be cancelled immediately if she didn't follow a link and enter her credit card and social
security numbers. After Morgan did so, she found out that the e-mail wasn't actually from her credit-card
company. Instead, it was a scam designed to steal her personal information. Morgan was a victim of</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. phishing.</option><option value="B">B. baiting.</option><option value="C">C. skimming.</option><option value="D">D. hacking.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is A: phishing.</h5><h5>Phishing occurs when a scammer sends out an e-mail pretending to be a legitimate company,
such as a credit-card company, in order to gain personal information. The phisher typically sends readers
to a fake website that asks them to enter personal information, which can include credit card numbers,
social security numbers, bank account numbers, etc. It's a good idea to be especially suspicious of any
requests for personal information you receive online. Avoid giving out personal information unless you
contact the company yourself. Skimming occurs when a thief runs a credit card through a "skimmer" to
steal personal information. Hacking involves a person gaining access to a computer system to steal
information. Baiting is not a term commonly used to describe phishing.
</h5></div><h5 id='q26'>26. Marco doesn't like to leave much to chance, so when it comes to investing his money, he knows that he
wants something relatively low-risk. He decides to invest in a combination of stocks from different
corporations in different industries because it is less risky than investing in just one stock. What type of
investment does Marco select?</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Money market account (MMA)</option><option value="B">B. Savings account</option><option value="C">C. Mutual fund</option><option value="D">D. Bond</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is C: Mutual fund</h5><h5>Mutual funds are a good investment for people who are concerned about risk. Stock mutual
funds are combinations of stocks from different corporations or agencies, usually from different
industries. The idea behind mutual funds is that they aren't as risky as buying individual stocks, but they
offer a good chance of receiving a return. The return Marco gets will depend on how much risk he's
willing to take. A savings account is a lending investment in which you lend money to a bank for the
benefit of being able to access your money at any time. Savings accounts are very low-risk, but they
don't make much money. With money market accounts, you're able to access some of your money each
month, but not all of it. There's a slightly higher interest rate than with a savings account. A bond is a
lending opportunity offered by a government, municipality, or corporation. Bonds are low-risk, but you
have to be willing to leave your money with the borrower for a long time (sometimes as much as 30
years!).
</h5></div><h5 id='q27'>27. When a customer slips on a wet floor in Ruchita's restaurant, he breaks his ankle. He decides to sue her
business. Luckily, Ruchita doesn't have to pay the damages because she has ______ insurance.</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. health</option><option value="B">B. life</option><option value="C">C. property</option><option value="D">D. liability</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is D: liability</h5><h5>Liability insurance provides compensation for losses caused by injuries, accidents, and
negligence. It protects businesses like Ruchita's from having to pay for liability-related costs themselves.
Life insurance provides coverage to beneficiaries when the policyholder dies. Property insurance
compensates business owners if their buildings, equipment, or inventory are damaged or lost. If a fire or
flood wipes out a business's inventory, property insurance can help the business avoid complete financial
ruin. Health insurance helps employees pay for their doctor visits, medicine, and any other health-care
related expenses.
</h5></div><h5 id='q28'>28. Which of the following is considered an operating expense:</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Packaging</option><option value="B">B. Utilities</option><option value="C">C. Stolen items</option><option value="D">D. Raw materials

2013 HS ICDC

HOSPITALITY AND TOURISM CLUSTER EXAM

4
</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is B: Utilities</h5><h5>Utilities fall under the “operating expenses” category on an income statement. Operating
expenses are those incurred from keeping a business's doors open. The business pays these expenses
so it can operate. Operating expenses can be either variable (amounts that are constantly changing,
such as advertising costs) or fixed (amounts that stay the same for long periods of time, such as rent).
This category includes expenses like employee wages, insurance, and administrative costs. Packaging,
stolen items, and raw materials are all considered cost of goods sold/cost of sales. This category on an
income statement includes all direct costs to obtain and/or produce the goods or services that a business
sells.
</h5></div><h5 id='q29'>29. Which of the following statements is true about maintaining a petty-cash fund:</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. Businesses typically use petty cash funds to pay for transactions that are $25 or less.</option><option value="B">B. Three or more employees should be in charge of maintaining the petty-cash fund.</option><option value="C">C. To record petty-cash transactions, employees should complete a purchase-order form.</option><option value="D">D. Employees are required to pay back the petty-cash fund, so there is no need to replenish the
funds.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is A: Businesses typically use petty cash funds to pay for transactions that are $25 or less.</h5><h5>Businesses use
petty-cash funds to pay for small, work-related expenses such as stamps, office supplies, or snacks for
an office meeting. Petty-cash policies vary by business, but employees are usually required to provide a
receipt for bookkeeping purposes. It is best to one or two employees manage the petty cash to ensure
that the funds are tracked and replenished appropriately. Businesses complete and submit purchase
orders to vendors for large orders.
</h5></div><h5 id='q30'>30. Which of the following is an example of a finance professional exhibiting responsible behavior:</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. During a dinner party, Ryan tells his friend specific details about a client's stock portfolio and
financial status.</option><option value="B">B. Katherine wants to make a large commission, so she tries to sell a high-risk financial product to a
client.</option><option value="C">C. A financial advisor delays contacting Olivia to advise her that the value of some of her stock is
rapidly declining.</option><option value="D">D. During their first meeting, a financial planner asks Colin specific questions about his financial
goals.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is D: During their first meeting, a financial planner asks Colin specific questions about his financial
goals.</h5><h5>Explanation not available</h5></div><h5 id='q31'>31. Which of the following statements is true of budgets:</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. They are only necessary for large businesses.</option><option value="B">B. They involve going without any “extras.”</option><option value="C">C. They create physical records of financial information.</option><option value="D">D. They must be inflexible to be effective.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is C: They create physical records of financial information.</h5><h5>It would be impossible for a business to remember
and keep track of all of its financial information without recording it in some way. With a budget, a
business is able to keep a record of financial information that is accurate, accessible, and meaningful.
Budgets do not mean going without any "extras," although that is what the word brings to mind for many
people. Budgets are actually powerful tools for accomplishing financial goals, even extraordinary ones.
Budgets are not just for large businesses—they're also a necessity for the smallest business. Budgets
must be flexible in order to be effective. After all, they're only estimates. A business might spend or earn
more money than it originally estimated. To accommodate these variances, budget figures may have to
be adjusted.
</h5></div><h5 id='q32'>32. Noreen, a human resources manager, wants to find applicants for several job openings at her company.
She attends job fairs, places ads online, and partners with an outside employment agency. This aspect of
staffing is known as</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. onboarding activities.</option><option value="B">B. interviewing.</option><option value="C">C. orientation.</option><option value="D">D. recruitment.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is D: recruitment.</h5><h5>Recruiting is the aspect of staffing that involves seeking out and attracting qualified potential
employees. The key to recruitment is finding just the right number of applicants—not enough, and it may
be difficult to find a qualified, well-suited candidate; too many, and the process becomes lengthy and
time-consuming. Interviewing happens after a list of potential candidates has been identified and the
applicants who don't meet minimum requirements have been "weeded out." Onboarding activities occur
after an employee has been hired and can include employee orientation and various types of paperwork,
like insurance, tax-withholding, direct deposit, and citizenship information. Orientation varies from
business to business, but it may involve giving the employee a tour of the facilities and making
introductions, giving the employee information about company procedures and policies, and familiarizing
the employee with his/her new work space and equipment.
</h5></div><h5 id='q33'>33. Marketing information revealed that the See-It Tour Company sold the most expensive tour packages in
the region last year, which is why the company saw a drop in sales. When the company reduced some of
its fees, its sales increased. In this situation, marketing information helped the tour company identify</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. distribution problems.</option><option value="B">B. inconsistent management processes.</option><option value="C">C. pricing issues.</option><option value="D">D. inefficient operating procedures.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is C: pricing issues.</h5><h5>When businesses have marketing information to help them identify opportunities and
problems that affect their activities, they can take action to grow their businesses and make changes to
improve their situations. In the example, marketing information revealed that the tour company lost sales
because it was charging too much money for its products. When the company lowered its prices, its sales
increased. There is not enough information to determine if management processes and operating
procedures played a role in the tour company's pricing issues. The situation does indicate if the company
experienced distribution problems.
</h5></div><h5 id='q34'>34. Which of the following is a situation that illustrates a hospitality/tourism business collecting primary
marketing information:</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. A car-rental company obtains a research report about travelers' automobile preferences from a
professional association's web site.</option><option value="B">B. A hotel sales representative follows up with clients to get feedback about their experiences with
the facility's banquet services.</option><option value="C">C. A motel housekeeping employee delivers extra towels to a guest's room and asks the guest if
s/he needs anything else.</option><option value="D">D. A corporate conference planner reads a trade publication to obtain information about trends in
the event-planning industry.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is B: A hotel sales representative follows up with clients to get feedback about their experiences with
the facility's banquet services.</h5><h5>Explanation not available</h5></div><h5 id='q35'>35. To generate more income for road repairs, beach maintenance, and landscaping, the local government
increased the hotel-occupancy tax rate by three percent. This is an example of a ___________ change
that affects the ___________ industry.</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. technology, transportation</option><option value="B">B. market, tourism</option><option value="C">C. regulatory, hotel</option><option value="D">D. policy, airline</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is C: regulatory, hotel</h5><h5>When governments increase taxes, they are making regulatory changes. When a
government increases the occupancy tax rate, hotels pass this increase onto their guests. The example
is not a market change that affects the tourism industry; a technology change that affects the
transportation industry; or a policy change that affects the airline industry.
</h5></div><h5 id='q36'>36. If 2,430,695 people visited a popular national park last year, and 40% of the visitors stayed one or more
nights at the park's campgrounds, how many overnight campers did the park have?</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. 977,822</option><option value="B">B. 987,272</option><option value="C">C. 972,278</option><option value="D">D. 982,778

2013 HS ICDC

HOSPITALITY AND TOURISM CLUSTER EXAM

5
</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is C: 972,278</h5><h5>Hospitality and tourism businesses and organizations measure and analyze different market
segments to determine how to best market their services. For example, a national park attracts many
types of markets including overnight campers, sightseers, rock climbers, bicycle enthusiasts, etc. To
determine the number of visitors who stayed overnight at the park's campgrounds, multiply the total
number of visitors by the percentage of overnight campers (2,430,695 X .40 or 40% = 972,278).
</h5></div><h5 id='q37'>37. A convention and tourism bureau mailed a questionnaire to 750 organizations and businesses and
received 27 completed questionnaires back. Based on the information provided, the disadvantage to
administering a questionnaire through direct mail is a(n)</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. poor survey design.</option><option value="B">B. low response rate.</option><option value="C">C. communication barrier.</option><option value="D">D. ineffective sampling plan.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is B: low response rate.</h5><h5>One disadvantage of administering a questionnaire through direct mail is that the
marketer cannot control how many people complete and return the questionnaire. In the example, the
convention and tourism bureau received 27 out of a possible 750 responses, which is a low response
rate, making the collected data less reliable. Poor survey design, an ineffective sampling plan, and other
communication barriers are potential factors that contributed to the low response rate; however, there is
not enough information provided to determine if these factors affected the questionnaire's response rate.
</h5></div><h5 id='q38'>38. A hotel restaurant surveyed its customers to find out how well they like its new summer salad. 200
customers completed the survey and rated the salad on a scale of 1 to 5 in the following manner: 11
rated it a 1; 22 rated it a 2; 68 rated it a 3; 84 rated it a 4; and 15 rated it a 5. Calculate the mean
calculated to the nearest tenth.</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. 3.9</option><option value="B">B. 3.4</option><option value="C">C. 4.2</option><option value="D">D. 4.8</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is B: 3.4</h5><h5>The mean is the average of the values within a sample. If the values range from 1 to 5, the mean is
the average of the respondents' ratings. To calculate mean, first multiply the number of respondents by
the value of their rating (11 X 1 = 11; 22 X 2 = 44; 68 X 3 = 204; 84 X 4 = 336; 15 X 5 = 75). Then, add
the values and divide by the number of respondents (11 + 44 + 204 + 336 + 75 = 670; 670 ÷ 200 = 3.35
or 3.4). In this example, 3.4 is the mean rating for the quality of the hotel restaurant's new summer salad
based on a scale of 1 to 5.
</h5></div><h5 id='q39'>39. Which of the following visual aids is the most effective way to show the relationship between two or more
variables over time:</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Pie chart</option><option value="B">B. Geographic map</option><option value="C">C. Line chart</option><option value="D">D. Mind map</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is C: Line chart</h5><h5>Line charts help the audience understand how circumstances or variables relate to one
another over time. For example, a line chart might show how a hotel's occupancy rates change over
several months or years. Geographic maps illustrate differences or conditions within a geographic area.
Businesspeople often use a pie chart to compare the parts of a whole concept. A mind map is a
brainstorming tool that helps users graphically organize ideas and information by using shapes, pictures,
and words.
</h5></div><h5 id='q40'>40. What do executive housekeepers record on inventory lists?</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. All of the items that need to be fixed in a guestroom</option><option value="B">B. All of the items in the kitchen that the executive housekeeper manages</option><option value="C">C. All of the incoming items the executive housekeeper is expecting to receive</option><option value="D">D. All of the items in a guestroom that need a housekeeper's attention</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is D: All of the items in a guestroom that need a housekeeper's attention</h5><h5>To aid in planning the housekeeping
department's work, the executive housekeeper prepares inventory lists of all the items that need
housekeeping's attention. The report should be prepared in the order in which housekeepers will clean
items and in which supervisors will inspect the rooms. The inventory lists are also used to develop
cleaning procedures, training plans, and inspection checklists. The executive housekeeper does not
manage the kitchen. Items go into inventory once they're received—not while they're expected. Items that
need to be fixed are identified on a maintenance report.
</h5></div><h5 id='q41'>41. To ensure that all key points of a research report are covered, the marketer should write the executive
summary</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. before preparing the conclusion section.</option><option value="B">B. first.</option><option value="C">C. before preparing the recommendations section.</option><option value="D">D. last.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is D: last.</h5><h5>Placed at the beginning of the research report, the executive summary is an overview of entire
report. It highlights the key points of the research report and is usually written after all other report's
components (e.g., methodology, recommendations, and conclusion) have been completed to ensure that
the most important information is included.
</h5></div><h5 id='q42'>42. A hotel employee tells his/her guests that the hotel offers shuttles to and from the airport. This is an
example of</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. service marketing.</option><option value="B">B. process marketing.</option><option value="C">C. a tangible product.</option><option value="D">D. a luxury product.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is A: service marketing.</h5><h5>Services are intangible products that other people perform. In the example, the hotel's
shuttle-bus driver is performing the service of transporting guests from one location to another. The
situation provided is not an example of process marketing, a tangible product, or a luxury product.
</h5></div><h5 id='q43'>43. Yvonne and her family often eat at their favorite pizza place. They love this particular pizza place
because they've built a relationship with the restaurant's employees, who are always friendly and
accommodating. This is known as a(n) _______ motive.</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. rational</option><option value="B">B. emotional</option><option value="C">C. experience</option><option value="D">D. quality</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is B: emotional</h5><h5>Emotional motives are reasons for buying that appeal to customers' feelings. In Yvonne's
case, her family's emotional motivation is their relationship with the restaurant's employees. Rational
motives are reasons for buying that appeal to customers' senses of logic or judgment. For example, if
Yvonne's family went to a pizza place that has the lowest prices, that would be a rational motive. A
combination of both emotional and rational motives is typically what it takes to convince customers to
make a purchase. However, not everyone's the same—some people care more about rational motives,
while others care more about emotional motives. That's why it's so important for a company to get to
know its customers and figure out what they want. Experience and quality are not terms commonly used
to describe motives.
</h5></div><h5 id='q44'>44. When a lodging property develops a weekend package for groups of women who enjoy scrapbooking, it
is segmenting the market by</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. lifestyle and gender.</option><option value="B">B. gender and life cycle.</option><option value="C">C. life cycle and geography.</option><option value="D">D. geography and lifestyle.</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is A: lifestyle and gender.</h5><h5>The lodging facility is offering a product option that appeals to women (gender) who
enjoy scrapbooking, which is a hobby or lifestyle choice. Segmenting a market by life cycle involves
designing travel products to appeal to people in their various stages of life, such as retirees or young
families. Geographic segmentation involves segmenting a market by physical location.
</h5></div><h5 id='q45'>45. Which of the following types of information should a business keep on file indefinitely:</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Federal income tax returns</option><option value="B">B. Cancelled checks</option><option value="C">C. Invoices</option><option value="D">D. Credit card statements</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: Federal income tax returns</h5><h5>The IRS suggests there are some records that a company should keep for
the life of the business. These records include federal income tax returns. Some other types of business
documents don't need to be kept as long. Documents such as cancelled checks and invoices only need
to be kept about six or seven years, while credit card statements only need to be retained for a year. It's
important to keep documents for the recommended amount of time in the event of a tax audit. When it's
time to dispose of a file, per the company's policy, that file should be completely destroyed.
</h5></div><h5 id='q46'>46. Adian is conducting online research for a marketing project at work. What web-based tool will help Adian
save and organize the web sites that contain the relevant information he needs for his final report?</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Browser bookmarking applications</option><option value="B">B. Notebook with color-coded dividers</option><option value="C">C. Word-processing memo template</option><option value="D">D. Personal intranet connection

2013 HS ICDC

HOSPITALITY AND TOURISM CLUSTER EXAM

6
</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is A: Browser bookmarking applications</h5><h5>Browsers are computer software that retrieve information from the
World Wide Web. Browsers have bookmarking applications that allow computer users to select web sites
and store their URLs on a personal computer for easy access in the future. Bookmarking applications
allow users to organize sites by categories by placing them into folders on a computer. Notebooks are
not online tools. An intranet is an internal network similar to the Internet that is accessible only by
authorized employees. A word-processing memo template formats a type of written message.
</h5></div><h5 id='q47'>47. The Links Golf Resort uses computer software that charges its guests' food, golf, retail, and other resortrelated expenses to their accounts through their room key-cards. The software increases the resort's
efficiency because it is</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. independent.</option><option value="B">B. automated.</option><option value="C">C. remote.</option><option value="D">D. retractable.</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is B: automated.</h5><h5>Room key-cards are similar to credit cards. When the guest swipes his/her room key-card at
the point of sale (e.g., hotel restaurant), the computer chip that is embedded in the room key-card
transmits transaction data to the hotel's computer system, which adds the expense to the guest's folio or
bill. The guest pays for his/her purchases during the check-out process. This software helps the resort
accurately track its guests' buying behavior and increases hotel efficiency because it reduces paperwork
by using a central bookkeeping system. The software is not independent, remote, or retractable.
</h5></div><h5 id='q48'>48. Which of the following is a disadvantage of keeping digital records:</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. They are unreliable and easily lost.</option><option value="B">B. They are more difficult to retrieve than paper records.</option><option value="C">C. They are typically expensive to store.</option><option value="D">D. They can become inaccessible due to obsolete technology.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is D: They can become inaccessible due to obsolete technology.</h5><h5>Technology advances quickly, and it can
become out of date just as fast. For instance, most of today's computers cannot access data stored on a
floppy disc. Smart businesses “migrate” their older digital records to current technology whenever
possible. Digital records are actually easier to retrieve than paper records because you don't have to rifle
through file cabinets to find what you're looking for. Digital records are also less expensive to store than
paper records, since they don't require any physical space or filing cabinets. Digital records are reliable
and they aren't easily lost, especially if you're careful to back up all of your information.
</h5></div><h5 id='q49'>49. Which of the following is true of internal record maintenance?</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. It helps you determine your profit.</option><option value="B">B. It is important solely for tax purposes.</option><option value="C">C. It isn't necessary for new or small companies.</option><option value="D">D. All records must be kept for the life of the business.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is A: It helps you determine your profit.</h5><h5>If you don't pay attention to or maintain records, you'll have no idea
how much your business is selling or where you're losing money. It's important to maintain good records
so you can determine your profit. Records help you keep track of sales, prices, and inventory, all of which
help you determine how much money your business is actually making. Record maintenance isn't just
important for tax purposes—it's helpful with all aspects of business planning! Internal record maintenance
is important for all companies, whether they're big, small, new, or old. In fact, record maintenance can
help a small company identify opportunities and grow into a larger company. While it's important to keep
some records indefinitely (income tax returns, for example), some records only need to be kept for a
much shorter amount of time. For example, there's no need to keep every receipt forever.
</h5></div><h5 id='q50'>50. Trends indicate a rise in the number of people who like to bring their dogs with them on vacation. To
accommodate this travel trend, there are an increasing number of</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. pet-friendly hotels.</option><option value="B">B. residential dog parks.</option><option value="C">C. all-inclusive resorts.</option><option value="D">D. boutique pet stores.</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is A: pet-friendly hotels.</h5><h5>Because many people consider pets to be important members of their families, they
often prefer to travel with them. Many hotel chains and destination rental properties are beginning to
provide pet-friendly accommodations. Some boutique hotels even provide special services to pamper
pets such as grooming, spa, and walking services. Many communities are opening dog parks, which tend
to attract local residents that need a place for their pets to exercise rather than travelers. All-inclusive
resorts are those in which food and beverages are included in the price of the guest's stay. All-inclusive
resorts may or may not allow pets on the property.
</h5></div><h5 id='q51'>51. Which of the following restaurant assets would be considered intangible:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. A secret recipe</option><option value="B">B. An expensive oven</option><option value="C">C. The building</option><option value="D">D. The waiter's uniforms</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is A: A secret recipe</h5><h5>An intangible asset is one that's not physical. For example, intellectual property, trade
secrets, customer lists, and business plans are all intangible assets. Even though intangible assets aren't
physical, they're sometimes the most valuable thing a company owns. A secret recipe may be what
differentiates one restaurant from another. Ovens, buildings, and waiter's uniforms are all tangible,
physical business property.
</h5></div><h5 id='q52'>52. Which of the following is a common challenge for project managers:</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Laws and regulations</option><option value="B">B. Poorly defined goals</option><option value="C">C. A surplus of resources</option><option value="D">D. A lack of risk</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is B: Poorly defined goals</h5><h5>Poorly defined project goals are one of the many challenges that project managers
routinely face. A surplus of resources would be a good thing, as would a lack of risk! Laws and
regulations may affect business projects, but they typically don't pose a challenge.
</h5></div><h5 id='q53'>53. Filipe is a chef at a restaurant. He always starts with his resources, such as raw vegetables and meats,
and then turns them into a fully-cooked meal. When Filipe turns his ingredients into a complete meal,
he's taking part in</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. mass production.</option><option value="B">B. dispatching.</option><option value="C">C. the conversion process.</option><option value="D">D. resource transformation.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is C: the conversion process.</h5><h5>During the conversion process, inputs turn into products. Any activity that takes
resources and turns them into something usable is considered a conversion process. In Filipe's case, this
includes cooking. He starts with resources (raw vegetables and meats) and turns them into something
usable (a fully-cooked meal). Dispatching involves issuing orders for production to start. Dispatches are
usually written orders that tell employees what their job assignments are, when to move materials from
storage to the work area, or which tools and equipment to assemble. Mass production means producing
products in large quantities. Mass production typically involves assembly lines, robotics, automation, and
computer-controlled equipment. This is not what Filipe's doing when he prepares one meal at a time.
Resource transformation is not a term commonly used to refer to the conversion process.
</h5></div><h5 id='q54'>54. Which of the following quality control methods is proactive:</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Inspecting finished products</option><option value="B">B. Filling out a corrective action report</option><option value="C">C. Creating a quality assurance checklist</option><option value="D">D. Processing customer returns</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is C: Creating a quality assurance checklist</h5><h5>Proactive quality control involves stopping problems before they
happen. One way to do this is by creating a quality assurance checklist. Quality assurance methods are
typically proactive and often save money since defective products are never produced. Reactive quality
control focuses on fixing problems after they've happened. This can include tasks such as filling out a
corrective action report, inspecting finished products, and processing customer returns. Reactive quality
control tends to cost more money and create more waste, since problems aren't discovered until after the
products have already been produced.
</h5></div><h5 id='q55'>55. Which of the following is considered a variable expense:</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Sales commissions</option><option value="B">B. Rent</option><option value="C">C. Loan payments</option><option value="D">D. Insurance</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is A: Sales commissions</h5><h5>Variable expenses are those that can change when sales volume changes. This
includes sales commissions. When there are fewer sales, a business pays a smaller amount in sales
commissions, but when sales are up, it pays more. Fixed expenses don't change, even when sales
fluctuate. Rent, loan payments, and insurance are all considered fixed expenses. Even if your business
doesn't have a single customer, you still have to pay these expenses.
</h5></div><h5 id='q56'>56. Although the primary purpose of an invoice is to bill a customer for goods and services, invoices can also
help the business monitor its customers'</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. purchasing habits.</option><option value="B">B. personal attitudes.</option><option value="C">C. annual incomes.</option><option value="D">D. buying motives.</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is A: purchasing habits.</h5><h5>An invoice is the formal, printed record of a sale that includes all necessary
information of a sales transaction. The information includes the buyer, the seller, items purchased,
quantities, prices, delivery date, credit, discount terms, etc. Because invoices record detailed information
about sales transactions, businesses can review their invoices to analyze their customers' buying habits.
By reviewing invoices, a business can determine the best-selling products and the products that are not
moving, which helps the business make decisions about its product mix. Invoices do not reveal
information about customers' personal attitudes, annual incomes, or buying motives.
</h5></div><h5 id='q57'>57. It is important for hotel employees to wear disposable gloves when emptying trash containers to</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. prevent damage to the floors and furniture.</option><option value="B">B. avoid direct contact with sharp objects and bacteria.</option><option value="C">C. reduce the risk of inhaling dangerous fumes.</option><option value="D">D. decrease the risk of security breaches.

2013 HS ICDC

HOSPITALITY AND TOURISM CLUSTER EXAM

7
</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: avoid direct contact with sharp objects and bacteria.</h5><h5>Wearing disposable gloves when emptying trash
containers prevents direct skin contact with bacteria, sharp objects (e.g., broken glass), and dangerous
chemicals that can harm the employee's hands and spread blood-borne pathogens. Wearing disposable
gloves does not prevent damage to floors and furniture, decrease the risk of security breaches, or reduce
the risk of inhaling dangerous fumes. To reduce exposure to fumes, employees should wear ventilation
masks.
</h5></div><h5 id='q58'>58. To reduce the risks of air-travel terrorism attacks, airports require passengers to</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. follow security checkpoint procedures.</option><option value="B">B. remain seated on airplanes at all times.</option><option value="C">C. fasten their seatbelts during take-off and landing.</option><option value="D">D. board the airplane one at a time.</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is A: follow security checkpoint procedures.</h5><h5>Due to terrorism threats, airports require passengers to follow
several procedures before boarding airplanes. The procedures typically involve baggage searches and
electronic body scans to check for potentially deadly items such as explosives, guns, and knives.
Passengers are required to remain seated and wear seatbelts during take-off and landing for personal
safety reasons. While in the air, airlines typically allow passengers to get out of their seats to use the
bathroom facilities. Boarding the airplane one person at a time does not reduce the risk of air-travel
terrorism attacks because security measures occur before the passengers board the airplane.
</h5></div><h5 id='q59'>59. Shoshanna wants to become a manager at her office by the end of next year. She writes down what she
wants, breaks it down into achievable steps, visualizes herself succeeding, and periodically reviews her
progress. Shoshanna is engaging in</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. objective predicting.</option><option value="B">B. goal setting.</option><option value="C">C. success forecasting.</option><option value="D">D. progress planning.</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is B: goal setting.</h5><h5>Goal setting is the ability to visualize, set, and focus on achieving objectives. It's how you
determine what it is you want to do. The basic steps of goal setting include choosing your goal, writing
your goal down, breaking your goal down, visualizing your goal, and reviewing and updating your goal
regularly. Objective predicting, success forecasting, and progress planning are not terms commonly used
to describe goal setting.
</h5></div><h5 id='q60'>60. You're trying to decide which college to attend. What type of decision are you making?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Routine</option><option value="B">B. Limited</option><option value="C">C. Extensive</option><option value="D">D. Problematic</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is C: Extensive</h5><h5>Decisions that demand a lot of careful consideration, such as deciding which college to
attend, are known as extensive decisions. Limited decisions refer to decisions that require a little time to
look at each alternative, and routine decisions are ones you hardly have to think about at all. Neither
applies to your college search, since you'll likely be spending a great deal of time deciding where to go.
Problematic isn't a term used to describe decision making styles.
</h5></div><h5 id='q61'>61. Angelo calculates the risk of loss, establishes premium rates, and designs policies for his company. His
career is in the area of</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. accounting.</option><option value="B">B. insurance.</option><option value="C">C. securities and investments.</option><option value="D">D. corporate finance.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is B: insurance.</h5><h5>Angelo is an underwriter, so his job responsibilities include calculating the risk of loss,
establishing premium rates, and designing policies. The insurance industry exists to protect individuals
from financial losses. Other careers in insurance include insurance agent, claim adjuster, and benefits
consultant. Accounting encompasses careers that record, classify, summarize, analyze, and
communicate a business's financial information and business transactions for use in management
decision making. The securities and investments industry consists of brokerage firms, investment banks,
and stock exchanges. The corporate finance function in a company is to manage policy and strategy for
capital structure, budgeting, acquisition, and investment; financial modeling and planning; funding;
dividends; and taxation.
</h5></div><h5 id='q62'>62. Which of the following information should you include in your résumé:</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Relevant volunteer experience</option><option value="B">B. Reasons for leaving a previous job</option><option value="C">C. Your salary expectations</option><option value="D">D. Your personal references</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is A: Relevant volunteer experience</h5><h5>Don't limit yourself to including just work or school experience on your
résumé. If you learned relevant skills while volunteering, let your potential employers know! It's important
to remember that you don't have to include everything about your life on your résumé. In fact, there's
some information you should definitely leave out. While honesty is always the best policy, you shouldn't
mention why you left a previous job on your résumé. Save that information for your interview (if the
interviewer asks). Don't disclose your salary expectations, either. If an employer wants to know your
salary expectations, s/he will ask for them. Otherwise, giving a number that's either too high or too low
could take you out of the running. You shouldn't list your personal references on a résumé because
employers usually only end up calling your references if you've advanced in the interview process. An
interviewer will ask to see your references if s/he needs them. It's also important to show respect for your
references and only give out their contact information when it's absolutely necessary.
</h5></div><h5 id='q63'>63. Mia is very organized and detail-oriented and enjoys helping others arrange activities such as
fundraisers, receptions, and meetings. Based on her skills and interests, Mia might consider working in
the hospitality industry as a(n)</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. accounting manager.</option><option value="B">B. restaurant chef.</option><option value="C">C. purchasing agent.</option><option value="D">D. event planner.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is D: event planner.</h5><h5>Convention centers, hotels, restaurants, and other types of businesses hire and employ
event planners to coordinate many types of events including fundraisers, wedding receptions, trade
shows, and business meetings. To ensure that their clients have everything they need for successful
events, event planners should be organized and detail-oriented. A restaurant chef develops the menu,
prepares entrées, and manages the kitchen staff. A purchasing agent locates, negotiates, and buys
goods and services for the business. An accounting manager supervises the accounting function's staff
and activities.
</h5></div><h5 id='q64'>64. What services do many trade organizations provide tourism professionals that helps them learn about
industry trends?</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Credit</option><option value="B">B. Job-search</option><option value="C">C. Educational</option><option value="D">D. Transit</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is C: Educational</h5><h5>Trade and professional organizations typically provide their members with opportunities to
further their education within the industry by offering seminars, workshops, classes, etc. These types of
continuing education programs help tourism professionals keep up with trends that affect the tourism
industry. Many trade and professional organizations post industry-related job openings on their web sites
and in their newsletters; however, this practice, as well as credit and transit services, do not usually
involve educating members about industry trends.
</h5></div><h5 id='q65'>65. The Internet has changed the way that consumers purchase hospitality and tourism products because
they now have the ability to</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. allocate more discretionary income for leisure travel.</option><option value="B">B. hire travel agents to develop custom tours.</option><option value="C">C. book trips at their convenience.</option><option value="D">D. visit new destinations several times a year.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is C: book trips at their convenience.</h5><h5>Today, people are able to access airline, car-rental, hotel, and travel
(e.g., Expedia) web sites 24/7. Consumers access web sites through the Internet, which enables
consumers to research destinations, comparison shop, and book their trips at their convenience.
Because consumers are booking more of their travel plans themselves, the use of travel agents has
declined. Not everyone has the income or ability to travel several times a year.
</h5></div><h5 id='q66'>66. Last year, Jasper Ridge Ski Resort's occupancy rates were lower than normal because the country's
overall unemployment rate increased and consumer spending decreased. As a result, Jasper Ridge
lowered its prices to stimulate demand. What factor affected the resort's pricing decision?</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Political uncertainty</option><option value="B">B. Competitors' activities</option><option value="C">C. Economic conditions</option><option value="D">D. Weather conditions</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is C: Economic conditions</h5><h5>Data is available by age, income, and region. The
Consumer Confidence Index is made up of the Present Situation Index (40%) and the Expectations Index
(60%). The Present Situation Index is based on how consumers rate present business conditions and
available jobs in their area. The Expectations Index is derived from predictions for business conditions
and job availability in six months. Economics and past situation are not indices that are a part of the
Consumer Confidence Index.
</h5></div><h5 id='q67'>67. When employees interact with customers in consistent ways, they are</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. explaining the business's brand philosophy.</option><option value="B">B. improving the company's product line.</option><option value="C">C. following company selling policies.</option><option value="D">D. communicating the business's core values.

2013 HS ICDC

HOSPITALITY AND TOURISM CLUSTER EXAM

8
</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is D: communicating the business's core values.

2013 HS ICDC

HOSPITALITY AND TOURISM CLUSTER EXAM

8
</h5><h5>Explanation not available</h5></div><h5 id='q68'>68. Which of the following hotels is most likely to have a competitive advantage over other hotels:</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. The Marcus Hotel because it is located near a major highway on the outskirts of a large city</option><option value="B">B. The Regency Hotel because it is the only hotel in Portland that offers childcare services</option><option value="C">C. The Metropolis Hotel because it has a full-service restaurant near the hotel's lobby</option><option value="D">D. The Hightower Hotel because it has an indoor swimming pool that guests can use</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is B: The Regency Hotel because it is the only hotel in Portland that offers childcare services</h5><h5>A competitive
advantage is the edge achieved by a business that offers something better than the competition. The
Regency Hotel differentiates itself from other hotels by being the only hotel in the city to provide childcare
services for guests, which provides it with a competitive advantage. Many hotels are located near major
highways and have full-service restaurants and indoor swimming pools. There is not enough information
provided to determine if these options provide their guests with something unique that give the hotels a
competitive advantage.
</h5></div><h5 id='q69'>69. What type of statistical data would most likely indicate that a product may be outdated?</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Retention rate</option><option value="B">B. Frequency rate</option><option value="C">C. Inventory turnover rate</option><option value="D">D. Conversion rate</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: Inventory turnover rate</h5><h5>The inventory turnover rate (stockturn) is the number of times that stock is sold in
a given period of time. The turnover rates can reveal which items are popular and which items are not
selling well. If the items are moving slowly, the turnover rate will be low. If the item is inexpensive and has
sluggish sales, it might be outdated. This type of statistical data can help the business decide if it should
delete an item from its product line or not. Frequency is a quantitative measure of the average number of
times a target customer is exposed to an advertising message. The retention rate measures the
percentage of customers that a business retains or keeps over a specific period of time. The conversion
rate measures the percentage of prospective customers who respond to a promotional activity and then
buy from the business.
</h5></div><h5 id='q70'>70. The Fortnight Hotel chain has over 100 hotels throughout the country that are located near metropolitan
conference centers. The chain plans to build 15 golf resorts near popular destination areas over the next
five years. This is an example of a business planning a</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. franchise arrangement.</option><option value="B">B. restructuring effort.</option><option value="C">C. cannibalization strategy.</option><option value="D">D. product extension.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is D: product extension.</h5><h5>A product extension is a good or service added to an existing product line or product
category that relates to but differs from the main product. Because both product lines provide hospitality
services, they are related. The chain's two products differ because the new product markets to
destination travelers and businesspeople who golf, while the original product markets to businesses and
convention attendees. Cannibalization exists when the sale of one of the company's products takes away
sales from another of its products. Because the products attract different markets, it is unlikely that
cannibalization will occur after the golf resorts are up and running. The hotel chain is not restructuring its
organization. The hotel is not entering into a franchise arrangement, which is a contractual agreement
between a parent company and a franchisee to distribute goods or service.
</h5></div><h5 id='q71'>71. Which of the following is a product delivery question that a hospitality business should ask a potential
vendor during the vendor-selection process:</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. How do you rate the quality of your products?</option><option value="B">B. Do we get discounts on quantity purchases?</option><option value="C">C. What is the lead time for processing orders?</option><option value="D">D. Is it possible to get a prompt-payment discount?</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is C: What is the lead time for processing orders?</h5><h5>Lead time is the amount of time that passes between
placing an order and receiving the stock. Lead time is an important consideration when choosing vendors
because the business needs to determine the safety stock level to ensure that it doesn't run out of
inventory. Factors that affect the lead time include the vendor's order processing procedures, the
vendor's location in relation to the business, and/or production processes. Discounts and quality are not
issues that relate to the vendor's ability to deliver product.
</h5></div><h5 id='q72'>72. Before entering a negotiation session with a potential vendor, a business should</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. determine the concessions that it is willing to make.</option><option value="B">B. use aggressive tactics to ensure a favorable outcome.</option><option value="C">C. summarize the negotiation progress periodically.</option><option value="D">D. actively listen to the vendor's points of concern.</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: determine the concessions that it is willing to make.</h5><h5>Businesses negotiate contracts with their vendors to
obtain the best prices, sales terms, and support. Effective negotiations require careful research and
planning before the negotiation session begins. An important planning consideration is for the business to
determine its optimal outcome and the concessions that it is willing to make to achieve agreement.
Concessions are terms that the business is willing to give up. For example, the business's optimal
quantity discount is 15%, but it is willing to give up 3% and settle for a 12% discount. Use of aggressive
tactics is more likely to hinder the ability to reach agreement. Summarizing the negotiation process
periodically and actively listening to the vendor's points of concern are actions taken during the
negotiation rather than before.
</h5></div><h5 id='q73'>73. Which of the following is an effective design technique that adds a personal touch to a direct-mail piece:</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Stamping "Open Now" in neon pink on the back of the envelope</option><option value="B">B. Addressing the recipient as “Current Resident” on the mailing label</option><option value="C">C. Using a font that looks like handwriting in the envelope's address section</option><option value="D">D. Placing the return address at the bottom of the envelope</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is C: Using a font that looks like handwriting in the envelope's address section</h5><h5>Individuals and businesses
receive a lot of direct mail to their homes and offices. Many times, these special offers end up in the trash
can before they are opened. By adding personal touches, the direct-mail sender increases the chance
that the recipient will open and read the direct-mail offer. One technique many marketers use involves
printing the recipient's name and address directly on the envelope with a font that looks like handwriting.
This technique is especially effective when using an envelope that is the size of a greeting card. By doing
so, it appears that the offer is handwritten and personal. Addressing the recipient as “current resident” is
impersonal. Stamping “Open Now” on the envelope does not add a personal touch. The proper
placement of the return address is at the top left corner on the front of the envelope.
</h5></div><h5 id='q74'>74. The primary purpose of a corporate blog is to</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. replace the company's web site.</option><option value="B">B. sell independent products.
</option><option value="C">C. entertain the audience.</option><option value="D">D. connect with the target market.
</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is D: connect with the target market.
</h5><h5>Explanation not available</h5></div><h5 id='q75'>75. The name of a well-known company appears on the hood of a racecar in a video game. This is an
example of</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. videotainment.</option><option value="B">B. adverfeeding.</option><option value="C">C. advergaming.</option><option value="D">D. gamecasting.</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is C: advergaming.</h5><h5>Advergaming involves including a product, brand, or company in a video game for
promotional purposes. In the example, the video game involves car racing, so the company's name was
included on one of the video game's racecars as a sponsor. The situation described is not an example of
adverfeeding, videotainment, or gamecasting.
</h5></div><h5 id='q76'>76. The Fun-O-Rama Amusement Park is located in Albany, New York. Which of the following web sites is
the park's target market most likely to visit:</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. AlbanyLibrary.gov</option><option value="B">B. albanytourismbureau.org</option><option value="C">C. albanylegalservices.com</option><option value="D">D. AlbanyCatering.net</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is B: albanytourismbureau.org</h5><h5>Businesses typically place online advertisements on web sites that are most
likely to attract their target audiences. Because the city's tourism bureau promotes tourist activities in and
near the community, the amusement park is likely reach more members of its target market on the
tourism bureau's web site than it is on library, legal, or catering web sites.
</h5></div><h5 id='q77'>77. Which of the following is an effective way to personalize e-mail marketing communications:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. A multinational company places an online banner advertisement on a popular travel web site.</option><option value="B">B. A manufacturer sends an electronic newsletter using a distribution list addressed to “preferred
customers.”</option><option value="C">C. A business sends a customer an online birthday greeting that includes a coupon for its products.</option><option value="D">D. A producer sends a general e-mail thanking its customers for their patience during major
changes to its web site.

2013 HS ICDC

HOSPITALITY AND TOURISM CLUSTER EXAM

9
</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is C: A business sends a customer an online birthday greeting that includes a coupon for its products.</h5><h5>Explanation not available</h5></div><h5 id='q78'>78. When Serena designs a print advertisement, she makes sure that all of the parts of the ad relate to one
another effectively. What principle of design is Serena focusing on?</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. Contrast</option><option value="B">B. Emphasis</option><option value="C">C. Balance</option><option value="D">D. Unity</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is D: Unity</h5><h5>The basic principles of design are the guidelines for creating effective layouts for advertisements.
Unity involves making sure that all ad components—the headline, graphics, copy, etc.—relate to one
another effectively. Emphasis is the focal point of the advertisement. Balance is the design principle that
focuses on the size, weight, and position of the advertising elements. Contrast is the design principle that
uses elements of different sizes, shapes, textures, and tones.
</h5></div><h5 id='q79'>79. A health spa develops a print advertisement that contains two photos—one of a stressed-out woman
before she goes to the spa and one of her looking very relaxed after her stay at the spa. In this situation,
the illustrations are communicating product</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. benefits.</option><option value="B">B. features.</option><option value="C">C. tangibility.</option><option value="D">D. quality.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is A: benefits.</h5><h5>Advertisers often use before and after photos to illustrate the benefits (advantages) of using a
product or obtaining a service. In the situation presented, the ad suggests that a stay at the spa can help
you relax and feel rested. Features are a product's characteristics (e.g., size, weight, color, etc.). Spa
services are intangible. Quality is the product's level of excellence, which may be subjective in the eyes
of the consumer.
</h5></div><h5 id='q80'>80. A primary reason for including white space in a print advertisement is because it</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. minimizes distractions.</option><option value="B">B. clarifies the copy.</option><option value="C">C. adds texture.</option><option value="D">D. reduces the need for graphics.</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is A: minimizes distractions.</h5><h5>White space is blank space in a print advertisement that is unoccupied by text or
illustrations. Advertisers use white space as a design element to add balance to the ad layout. White
space minimizes distractions and clutter, which helps the reader to focus on the most important elements
of the advertisement. Using the right combination of words clarifies the copy or text. White space does
not add texture or reduce the need to include graphics in the advertisement.
</h5></div><h5 id='q81'>81. A primary difference between organic and amplified word-of-mouth (WOM) marketing is that organic
WOM is ____________ communication, while amplified WOM is _____________ communication.</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. systematic, free-flowing</option><option value="B">B. nonpersonal, customized</option><option value="C">C. unplanned, planned</option><option value="D">D. vertical, horizontal</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is C: unplanned, planned</h5><h5>Word-of-mouth (WOM) marketing involves customers telling others—family, friends,
and coworkers—of their satisfaction with a particular business. Organic word-of-mouth marketing occurs
when satisfied customers voluntarily tell people around them about a business that they like. In this way,
the communication or promotion is unplanned because it occurs during normal conversation. On the
other hand, amplified word-of-mouth marketing takes place when marketers encourage their customers
to share information about a business with others. Because the marketers develop and implement
strategies to distribute information for their customers to share with others, this type of communication is
planned. Organic WOM is personal, spontaneous, and may either be vertically (e.g., employee to
supervisor) or horizontally (e.g., friend to friend) transmitted. Amplified WOM may or may not be
customized, free-flowing, or horizontal communication.
</h5></div><h5 id='q82'>82. Who would be the most successful customer evangelist for the Evergreen Golf Resort?</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. Ruth Collins, a quiet librarian who lives in a rural community and enjoys reading, sewing, and
entertaining her ten grandchildren</option><option value="B">B. Mike Adams, an outgoing sales representative who plays a lot of golf and enjoys catching up with
friends on Facebook and Twitter</option><option value="C">C. Tommy Banes, a 15-year-old high-school student who spends most of his free time playing
sports-related video games with friends</option><option value="D">D. Olivia Bedford, a 26-year-old law-school student who spends most of her time studying and
working part time at a college bookstore</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is B: Mike Adams, an outgoing sales representative who plays a lot of golf and enjoys catching up with
friends on Facebook and Twitter</h5><h5>Explanation not available</h5></div><h5 id='q83'>83. A scene of a recently released movie shows a British Airways airplane landing on a runway at Heathrow
Airport in London, England. What type of paid promotion did the airline use?</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Organic publicity</option><option value="B">B. Product placement</option><option value="C">C. Systematic positioning</option><option value="D">D. Transit media</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is B: Product placement</h5><h5>Product placement is the inclusion or mention of a product or business (e.g., British
Airways) in a movie or television show. The situation presented is not an example of organic publicity,
systematic positioning, or transit media.
</h5></div><h5 id='q84'>84. Determine which copy strategy is being using in the following advertisement:
"Book your trip now! Only eight cabins left for August's seven-day Alaskan cruise."</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Independent endorsement</option><option value="B">B. Rational appeal</option><option value="C">C. Scarcity appeal</option><option value="D">D. Solicited endorsement</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: Scarcity appeal</h5><h5>Because there is a limited number of rooms on the cruise ship, the travel agency is
using a scarcity appeal to get clients to purchase the last available cabins on the ship. A rational appeal
involves focusing on the client's functional or practical needs. An endorsement is approval by a reputable
external source.
</h5></div><h5 id='q85'>85. What technology tool is often included in mobile ad copy that enables customers to contact the business
by telephone instantly?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Click-to-call</option><option value="B">B. Throughput</option><option value="C">C. RSS Feed</option><option value="D">D. JavaScript</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is A: Click-to-call</h5><h5>This is a form of technology that converts web-based text into telephone connections. The
technology involves embedding a hyperlink into a web advertisement that potential customers receive to
their computers, smartphones, or tablets by e-mail or text message. When a person clicks on the
hyperlink, it automatically connects him/her to the business by telephone. The advantage to businesses
that include click-to-call extensions in their mobile ads is that potential customers can get product
information or place an order immediately. Throughput measures the performance of network
connections, hard drives, and RAM. RSS (Really Simple Syndication) Feed is a content delivery system.
JavaScript is a programming language.
</h5></div><h5 id='q86'>86. What type of advertising proof uses printing inks to provide the most accurate representation of the
printed piece?</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Desktop digital</option><option value="B">B. Overlay</option><option value="C">C. Blueline</option><option value="D">D. Press</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is D: Press</h5><h5>A proof is the final opportunity for advertisers to review ads, correct mistakes, and approve the
ads. Correct color is very important to a company or organization that is placing print advertising. For
example, corporate logos may have a very specific color or color combination that identifies the
organization or product. Because a press proof uses the actual printing inks used to print the
advertisement, advertisers can see how the color will actually look on the printed piece. The
disadvantage of press proofs is that they are very expensive. Overlay proofs contain multiple colors, but
the colors are not very accurate. Bluelines show a single-color image. A desktop digital proof provides a
close representation of color, but it is not as accurate as a press proof.
</h5></div><h5 id='q87'>87. Which of the following community outreach programs is most appropriate for a tour-boat operator to
sponsor:</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Providing breakfast for the local homeless shelter</option><option value="B">B. Preventative dental care for low-income families</option><option value="C">C. Education programs for parents of ill children</option><option value="D">D. Low-cost or free swimming lessons for children

2013 HS ICDC

HOSPITALITY AND TOURISM CLUSTER EXAM

10
</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is D: Low-cost or free swimming lessons for children

2013 HS ICDC

HOSPITALITY AND TOURISM CLUSTER EXAM

10
</h5><h5>Explanation not available</h5></div><h5 id='q88'>88. What is an ongoing activity that is necessary to perform after launching a web site?</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Developing the code</option><option value="B">B. Planning the navigation system</option><option value="C">C. Testing the prototype</option><option value="D">D. Updating the content</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is D: Updating the content</h5><h5>Because web site visitors expect web-site information to be current, it is important
to update content as needed. For example, a business should update the product price list if prices
change and introduce new products when they are available. Planning the navigation, testing the system,
and developing the programming code are activities that are performed before the web site is launched.
</h5></div><h5 id='q89'>89. The first paragraph of a well-written press release should contain</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. the company's contact information.</option><option value="B">B. a quote from the company's president.</option><option value="C">C. the topic's most important facts.</option><option value="D">D. a humorous statement to grab the reader's attention.</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is C: the topic's most important facts.</h5><h5>Because press releases provide media outlets with news about the
business, writers typically use an inverted pyramid writing style. This means that the most important
points appear in the first paragraph. The subsequent paragraphs contain less important points. Writers
often include quotes in press releases, but they do not need to appear in the first paragraph. The use of
humor depends on the topic at hand, and is often inappropriate to use at all. Depending on the
publications' formatting specifications, the writer should place the contact information at the top or at
bottom of the press release, but not within the article.
</h5></div><h5 id='q90'>90. 300 guests will be attending the Robertson-Parker wedding reception at the River Edge Country Club.
If the ideal staffing ratio for the event is one foodservice server per 30 guests and one bartender per
75 guests, how many employees will the country club need to have on hand for the event?</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. 10</option><option value="B">B. 16</option><option value="C">C. 14</option><option value="D">D. 12</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is C: 14</h5><h5>When planning events, it is important to ensure that the venue has adequate staff on hand to serve
guests. To determine the number of employees that the country club needs to work during the wedding
reception, first divide the total number of guests by the number of guests per foodservice server (300/30
= 10). Then, determine the number of bartenders by dividing the total number of guests by the number of
guests per bartender (300/75 = 4). Finally, add together the number of foodservice servers needed and
the number of bartenders needed (10 + 4 = 14).
</h5></div><h5 id='q91'>91. A portable display is most appropriate for a hospitality business to use when the business</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. exhibits its products at trade shows frequently.</option><option value="B">B. needs to control its publicity costs.</option><option value="C">C. is promoting an unusual travel theme.</option><option value="D">D. distributes most of its services online.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is A: exhibits its products at trade shows frequently.</h5><h5>Many hospitality businesses exhibit at trade shows on a
regular basis. Portable displays are ideal for these businesses because they are simple to put up,
change, and taken down and are easy to transport and store. The cost to develop a portable display
might be a large, upfront expense for the business, but it often is worth the money if the business uses
the display frequently. The travel theme and distribution method of services are not primary
considerations when using a portable display. Publicity is any nonpersonal presentation of ideas, goods,
or services that is not paid for by the company or individual that benefits from or is harmed by it.
</h5></div><h5 id='q92'>92. If a hotel chain wants to track the number of times that Internet users access its web site through an ad
placed on another web site, what marketing metric should be used?</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Gross page impressions</option><option value="B">B. Click-through rate</option><option value="C">C. Cost per click</option><option value="D">D. Transactions per hour</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is B: Click-through rate</h5><h5>One disadvantage of administering a questionnaire through direct mail is that the
marketer cannot control how many people complete and return the questionnaire. In the example, the
convention and tourism bureau received 27 out of a possible 750 responses, which is a low response
rate, making the collected data less reliable. Poor survey design, an ineffective sampling plan, and other
communication barriers are potential factors that contributed to the low response rate; however, there is
not enough information provided to determine if these factors affected the questionnaire's response rate.
</h5></div><h5 id='q93'>93. When campsites are available, a campground offers its campers a 50% discount per night if they extend
their stay. What type of promotion is the campground using?</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Publicity</option><option value="B">B. Personal selling</option><option value="C">C. Sales promotion</option><option value="D">D. Advertising</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is C: Sales promotion</h5><h5>Sales promotion consists of promotional activities other than advertising, personal
selling, and publicity that stimulate customer purchases. Discounts, contests, rebates, and product
samples are examples of sales-promotion activities. In the example, the campground offers a discount to
current campers to encourage them to extend their stay, thereby reducing the campground's potential
revenue losses for unoccupied campsites. Personal selling is the form of promotion that determines the
client's needs and wants and responds through planned, personalized communication that influences
purchasing decisions and enhances future business opportunities. Publicity is any nonpersonal
presentation of ideas, goods, or services that is not paid for by the company or individual that benefits
from or is harmed by it. Advertising is any paid form of nonpersonal presentation of ideas, images, goods,
or services.
</h5></div><h5 id='q94'>94. Which of the following would a travel agency use in a display to promote a two-week tour of England:</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. A tabletop model of the Eiffel Tower in Paris and a slideshow that highlights the Louvre
Museum's major exhibits</option><option value="B">B. A continuous-running video that features sites such Buckingham Palace and the Tower of
London</option><option value="C">C. A large cardboard cutout of Mickey Mouse and Cinderella standing in front of the Magic Kingdom</option><option value="D">D. A sombrero, beach towel, colorful balloons, and a large poster of a tropical beach resort</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is B: A continuous-running video that features sites such Buckingham Palace and the Tower of
London</h5><h5>Explanation not available</h5></div><h5 id='q95'>95. Jack is a server at an upscale hotel restaurant. After his customers finish their meals, Jack shows them a
dessert tray that displays samples of the restaurant's signature cakes, pies, and ice-cream sundaes and
asks the customers if they would like to order one of the desserts. What activity is Jack performing?</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Up-selling</option><option value="B">B. Suggestion selling</option><option value="C">C. Substitute selling</option><option value="D">D. Identifying needs Identifying needs</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is B: Suggestion selling</h5><h5>Suggestion selling is a sales technique in which the salesperson attempts to increase
the customer's purchase by recommending additional items after the customer has decided to buy the
primary product. In the example, Jack attempts to increase the check amount by suggesting that his
customers buy dessert, which happens after they made (and consumed) their primary purchase
decisions—their meals. Up-selling is a sales technique in which the salesperson suggests that the
customer purchase a higher priced product rather than the one that the customer originally requests.
Substitute selling involves offering the customer a similar product when his/her original product request is
not available. Dessert is a want rather than a need.
</h5></div><h5 id='q96'>96. Which of the following is an attribute that a hotel salesperson should emphasize when selling the venue
to an event planner who is organizing a large awards banquet for prominent members of the media?</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. The food and beverage division employs a five-star chef.</option><option value="B">B. The facility has a heated outdoor swimming pool.</option><option value="C">C. The hotel utilizes several types of advertising media, including broadcast and print.</option><option value="D">D. The rooms division has 120 standard-size sleeping rooms.

2013 HS ICDC

HOSPITALITY AND TOURISM CLUSTER EXAM

11
</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is A: The food and beverage division employs a five-star chef.</h5><h5>When selling a venue, hotel salespeople should
differentiate the venue by focusing on the attributes that make the venue unique and are important to the
client (event planner). In the situation provided, the event is an awards banquet for members of the
media. Because banquets involve food service, the hotel salesperson would want to tell the client that the
hotel employs a five-star chef, which suggests that the chef prepares excellent food. Serving good food
to members of the media might result in positive publicity for the hotel. The swimming pool, number of
standard-size sleeping rooms, and the types of advertising media are not unique attributes that are likely
to sell the venue to the client.
</h5></div><h5 id='q97'>97. Melissa's family goes to the same remote beach destination every year for one week. All of the family
members enjoy the quiet, relaxing atmosphere that the location offers. In this situation, the motive to
travel to this location is</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. price.</option><option value="B">B. adventure.</option><option value="C">C. comfort.</option><option value="D">D. prestige.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is C: comfort.</h5><h5>Some people prefer traveling to familiar places, which in turn, provides comfort. Adventure
seekers tend to enjoy visiting different locations and participating in a variety of activities. The situation
does not provide enough information to determine if price or prestige play role in the travel motives or
decisions.
</h5></div><h5 id='q98'>98. Angela, a travel agent, is helping Mr. and Mrs. Wingate plan their vacation. During their conversation,
Angela learns that Mr. Wingate's hobby involves reenacting famous war scenes and that Mrs. Wingate
collects antiques and artifacts. Based on the information that Angela learned, she might recommend that
Mr. and Mrs. Wingate go on a</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. guided tour of historical battlefields and museums.</option><option value="B">B. seven-day Caribbean cruise.</option><option value="C">C. two-week safari in Kenya, Africa.</option><option value="D">D. trip to an exclusive resort located near several casinos.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is A: guided tour of historical battlefields and museums.</h5><h5>When making travel recommendations, travel agents
often consider their clients' personal interests. Because Mr. and Mrs. Wingate have hobbies that focus on
history, a guided tour of historical battlefields and museums is a logical travel recommendation to give the
couple. Although Mr. and Mrs. Wingate might enjoy a cruise, African safari, or a stay at an exclusive
resort, there is not enough information provided to determine if these options will appeal to them.
</h5></div><h5 id='q99'>99. What do many hotel chains sell that provides the buyers or users with flexibility to make reservations at
their convenience?</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Contest passes</option><option value="B">B. Reward points</option><option value="C">C. Gift certificates</option><option value="D">D. Keyless cards</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is C: Gift certificates</h5><h5>Gift-certificate/card sales are an important source of revenue for many types of
hospitality businesses. Consumers like to purchase gift certificates/cards for others because the gift
recipients can book a reservation where and when they want it, which provides them with flexibility. Hotel
chains do not sell reward points, contest passes, or keyless cards.
</h5></div><h5 id='q100'>100. Molly offers to take her new coworker out to lunch. She remembers what it was like when she was a new
employee two years ago, and she wants to help her new coworker feel comfortable and welcome. What
trait is Molly showing towards her new coworker?</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. Tact</option><option value="B">B. Empathy</option><option value="C">C. Sympathy</option><option value="D">D. Judgment</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is B: Empathy</h5><h5>Empathy is the ability to put yourself in another person's place or to see a situation from
another person's point of view. Molly can understand how her coworker feels because she was in the
same situation two years ago—that's empathy. Tact is the ability to do or say the right thing in any
circumstances. When you speak tactfully, you consider your words carefully before saying them. It's
important that Molly speak tactfully to her new coworker, but that's not what she's doing in this example.
Sympathy is the ability to recognize another person's feelings. If Molly simply felt sorry for her coworker's
situation, she would be sympathetic. However, Molly actually understands what it's like to be in her
coworker's position, so she's being empathetic. Molly is not judging her new coworker—being empathetic
means not being judgmental.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Hospitality_10_Whole_Homework.js"></script></html>