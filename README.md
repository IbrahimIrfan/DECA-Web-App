# DECA-Web-App

A web application to solve many of the problems at my high school DECA club, including parsed online exams, secure registration and authentication, user-specific announcements, and more.

# Parsing
Created a script [here](https://github.com/IbrahimIrfan/exam-parser) to parse poorly formatted PDF practice exams and output self marking online forms.

Before:

![screen shot 2018-02-11 at 8 23 28 pm](https://user-images.githubusercontent.com/19509792/36081239-fa3e076c-0f69-11e8-9be7-03912640baf5.png)
![screen shot 2018-02-11 at 8 34 05 pm](https://user-images.githubusercontent.com/19509792/36081308-f91567da-0f6a-11e8-94d0-a66c929588a2.png)

- Two different files for exam and answer key
- All on paper means no self-marking
- Hundreds of pages long, with small text and lots of unnecessary information
- No score tracking
- Inconsistent formatting across exams
- Bad

After:

![screen shot 2018-02-11 at 8 24 59 pm](https://user-images.githubusercontent.com/19509792/36081240-fa4ad91a-0f69-11e8-9966-a2002668cab9.png)
![screen shot 2018-02-11 at 8 25 30 pm](https://user-images.githubusercontent.com/19509792/36081241-fa5796e6-0f69-11e8-93ce-66960c0f99c1.png)

- Easy, online :ok_hand:
- One file :page_facing_up:
- No unnecessary information :book:
- Score tracking and self-marking :100:
- Consistent formatting across exams :white_check_mark:


# Registration
Secure registration is implemented with PHP using sha256 hashing and salts.

# Admin Access
Executives can track user exam scores, post announcements to their cluster with email notifications, and manage resources.

# Resources
Resources for each event are available under "Events".
