#!/usr/bin/python
"""
File: nextSemester.py
Author: Michael Riesberg-Timmer
Description: Reach to http://cs.uni.edu/courses.php and generate a file that is actually readable for nextSemester.html to reach into and produce neat results
"""
from urllib import urlopen

#GLOBALS
FALLLIST = list()
FALLFILE = open("/var/www/html/NextSemester/fall.txt","w")
SPRINGLIST = list()
SPRINGFILE = open("/var/www/html/NextSemester/spring.txt","w")
BOTHLIST = list()
BOTHFILE = open("/var/www/html/NextSemester/both.txt","w")

page = urlopen("http://cs.uni.edu/courses.php").read()
page = page.split("\n")
for thing in page:
    if thing[:7] == "<a name" and "cs" in thing:
        courseNumber = thing[9:15]

        #course name
        if "</b>" in page[page.index(thing)+3]:
            nameIndex = page.index(thing)+3
        else:
            nameIndex = page.index(thing)+2
        courseName = page[nameIndex].replace("</b>","").strip()

        #course hours
        hoursIndex = nameIndex+1
        hours = page[hoursIndex].split(".")[0]
        hours = hours.split()
        hours = hours[-2] + " " + hours[-1]

        #course Description
        descIndex = hoursIndex + 1
        description = ""
        prerequisites = ""
        #while not "Prerequisite(s):" in page[descIndex]:
        while not "</p>" in page[descIndex] and not "</p>" in page[descIndex+1]:
            description += page[descIndex] + " "
            descIndex += 1
        #course prerequisites
        prereqIndex = descIndex
        prerequisites = page[prereqIndex]
        """
        print page[prereqIndex]
        try:
            testIndex = page[prereqIndex].index("Prerequisite(s):")
            if testIndex != 0:
                desc += page[prereqIndex][:testIndex]
                prerequisites = page[prereqIndex][testIndex:]
            else:
                prerequisites = page[prereqIndex]
        except:
            description += page[prereqIndex]
            prerequisites = "prerequisite(s): N/A"
        """
        #if testIndex != 0:
        #    desc += page[prereqIndex][:testIndex]
        #    prerequisites = page[prereqIndex][testIndex:]
        #else:
        #    prerequisites = page[prereqIndex]

        #course offering
        offeringIndex = prereqIndex + 1
        #print page[offeringIndex]
        #offering = page[offeringIndex][page[offeringIndex].index("("):page[offeringIndex].index(")")+1]
        offering = page[offeringIndex].replace("  </p>","")

        #if not "prerequisite(s):" in prerequisites.lower():
        #    prerequisites = "prerequisite(s): N/A"
        if offering.lower() == "(offered fall)":
            #FALLLIST.append([courseNumber,courseName,hours,description,prerequisites,offering])
            FALLLIST.append(['<a name="%s"</a><p> <b>%s. %s</b> --%s. <br/> %s </p>' % (courseNumber, "CS "+courseNumber[2:], courseName, hours, description), '<p>%s</p>' % (offering), '<p>%s</p>' % (prerequisites)])
        elif offering.lower() == "(offered spring)":
            #SPRINGLIST.append([courseNumber,courseName,hours,description,prerequisites,offering])
            SPRINGLIST.append(['<a name="%s"</a><p> <b>%s. %s</b> --%s. <br/> %s </p>' % (courseNumber, "CS "+courseNumber[2:], courseName, hours, description), '<p>%s</p>' % (offering), '<p>%s</p>' % (prerequisites)])

        #BOTHLIST.append([courseNumber,courseName,hours,description,prerequisites,offering])
        BOTHLIST.append(['<a name="%s"</a><p> <b>%s. %s</b> --%s. <br/> %s </p>' % (courseNumber, "CS "+courseNumber[2:], courseName, hours, description), '<p>%s</p>' % (offering), '<p>%s</p>' % (prerequisites)])

        print courseNumber
        print courseName
        print hours
        print description
        print prerequisites
        print offering
        print "\n"


for course in FALLLIST:
    for info in course:
        FALLFILE.write(info + "\n")
    FALLFILE.write("\n")

for course in SPRINGLIST:
    for info in course:
        SPRINGFILE.write(info + "\n")
    SPRINGFILE.write("\n")

for course in BOTHLIST:
    for info in course:
        BOTHFILE.write(info + "\n")
    BOTHFILE.write("\n")

FALLFILE.close()
SPRINGFILE.close()
BOTHFILE.close()
