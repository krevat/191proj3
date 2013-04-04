#!/usr/bin/python

import sys

def main():
    thefile = open("count.txt", "r")
    count = thefile.read()
    thefile.close()
    count = int(count) + 1
    newcount = str(count)
    thefile = open("count.txt", "w")
    thefile.write(newcount)
    thefile.close()
    print newcount


main()
