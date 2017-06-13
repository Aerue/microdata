<?php
namespace MicroData\Thing\Intangible;

use MicroData\Thing\Intangible;

/**
 * Used to describe membership in a loyalty programs (e.g. " StarAliance "), traveler clubs (e.g. " AAA "), purchase clubs (" Safeway Club "), etc.
 */
class ProgramMembership extends Intangible {
    /**
     * The organization (airline, travelers' club, etc.) the membership is made with.
     *
     * @var Organization
     */
    protected $hostingOrganization = null;
    
    /**
     * A member of an Organization or a ProgramMembership.
     * 
     * Organizations can be members of organizations. ProgramMembership is typically for individuals. Supersedes members, musicGroupMember.
     * Inverse property : memberOf.
     *
     * @var Person | Organization
     * @see members
     * @see musicGroupMember
     * @see memberOf
     */
    protected $member = null;
    
    /**
     * A unique identifier for the membership.
     *
     * @var Text
     */
    protected $membershipNumber = null;
    
    /**
     * The program providing the membership.
     *
     * @var Text
     */
    protected $programName = null;
}